🛡️ MyAntiBot

MyAntiBot is a lightweight and configurable Anti-Bot plugin for PocketMine-MP servers.

It is designed to help server owners detect and control suspicious connections and reduce automated bot joins.

---

✨ Features

- 🛡️ Anti-Bot protection
- 🤖 Detects and controls suspicious connections
- ⚡ Lightweight and fast
- 🚀 Low resource usage
- 🔐 Temporary UUID memory
- 💾 Customizable kick message
- ⚙️ Configuration through "plugin_data"
- 📦 Designed for PocketMine-MP

---

📋 Information

Property| Value
Name| MyAntiBot
Type| Anti-Bot Plugin
Platform| PocketMine-MP
Language| PHP
License| MIT
Data Folder| "plugin_data/MyAntiBot"

---

📥 Installation

1. Download the latest "MyAntiBot.phar".
2. Put it into your PocketMine-MP "plugins" folder:

plugins/
└── MyAntiBot.phar

3. Restart your server.

The plugin will automatically create its data directory:

plugin_data/
└── MyAntiBot/

---

⚙️ Kick Message

MyAntiBot allows the server owner to customize the kick message from the plugin data directory without modifying the plugin source code.

Default message:

§l§aMyAntiBot §7>> §cServer AntiBot §7>> §fReconnect to this server

The message can be changed from:

plugin_data/MyAntiBot/

---

🔐 UUID Memory

MyAntiBot temporarily stores UUIDs to help manage repeated connections and avoid unnecessary processing.

The default memory duration is:

5 minutes

---

📂 Data Structure

plugin_data/
└── MyAntiBot/
    └── configuration files

Plugin-generated data and settings are stored inside this directory.

---

🚀 Performance

MyAntiBot is designed to remain lightweight while providing Anti-Bot protection for PocketMine-MP servers.

It does not require an external database or additional service.

---

🧩 Compatibility

MyAntiBot is designed for PocketMine-MP.

«Check the release information for the exact PocketMine-MP versions supported by each plugin version.»

---

🐛 Bug Reports

Found a problem?

Open an Issue and include:

- PocketMine-MP version
- MyAntiBot version
- Error message
- Relevant server log
- Steps to reproduce the issue

---

🤝 Contributing

Contributions, bug reports, feature requests, and pull requests are welcome.

For major changes, please open an Issue first to discuss the proposed changes.

---

📄 License

MyAntiBot is released under the MIT License.

---

<div align="center">🛡️ MyAntiBot

Lightweight Anti-Bot protection for PocketMine-MP

</div>