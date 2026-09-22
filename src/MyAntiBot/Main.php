<?php

declare(strict_types=1);

namespace MyAntiBot;

use pocketmine\event\Listener;
use pocketmine\event\player\PlayerPreLoginEvent;
use pocketmine\plugin\PluginBase;
use pocketmine\scheduler\ClosureTask;

class Main extends PluginBase implements Listener
{
    /** @var array<string, int> */
    private array $pendingUUIDs = [];

    protected function onEnable(): void
    {
        $this->saveDefaultConfig();

        $this->getServer()->getPluginManager()->registerEvents(
            $this,
            $this
        );

        // بررسی UUIDهای منقضی‌شده هر 10 ثانیه
        $this->getScheduler()->scheduleRepeatingTask(
            new ClosureTask(function (): void {
                $this->cleanupUUIDs();
            }),
            20 * 10
        );

        $this->getLogger()->info("MyAntiBot enabled!");
    }

    public function onPreLogin(PlayerPreLoginEvent $event): void
    {
        $uuid = $event->getPlayerInfo()->getUuid()->toString();

        // بازیکن قبلاً توسط AntiBot بررسی شده
        if (isset($this->pendingUUIDs[$uuid])) {
            if ((time() - $this->pendingUUIDs[$uuid]) <= 300) {
                unset($this->pendingUUIDs[$uuid]);
                return;
            }

            // 5 دقیقه گذشته
            unset($this->pendingUUIDs[$uuid]);
        }

        // اولین اتصال
        $this->pendingUUIDs[$uuid] = time();

        $event->setKickMessage(
            (string) $this->getConfig()->get(
                "kick-message",
                "§l§aMyAntiBot §7>> §cServer AntiBot §7>> §fReconnect to this server"
            )
        );
    }

    private function cleanupUUIDs(): void
    {
        $now = time();

        foreach ($this->pendingUUIDs as $uuid => $timestamp) {
            if (($now - $timestamp) > 300) {
                unset($this->pendingUUIDs[$uuid]);
            }
        }
    }

    protected function onDisable(): void
    {
        $this->pendingUUIDs = [];
    }
}