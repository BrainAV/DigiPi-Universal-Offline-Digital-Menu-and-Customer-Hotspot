# 🌿 DigiPi: Universal Offline Digital Menu and Customer Hotspot

## 🌟 Project Tagline
**Your local, secure, and dynamic digital signage server. Say goodbye to vendor lock-in and unreliable cloud menus.**

---

## 💡 Introduction

**DigiPi** transforms a low-cost single-board computer (like a Raspberry Pi) into a powerful, decentralized retail hub. It serves two critical functions:
1.  **Dynamic Menu Board:** Displays beautiful, static, and paginated product menus tailored for any industry (cannabis, QSR, retail, etc.), managed entirely over a local network.
2.  **Customer Hotspot:** Provides an isolated, free Wi-Fi network for customers, automatically directing them to your official online store.

The system is built to be **offline-first**, guaranteeing reliability even during internet outages, and **universal**, working with any standard TV or monitor running a modern web browser.

---

## ✨ Key Features

* **Universal Menu Builder:** Ingests simple CSV files and dynamically builds a powerful, flexible menu.
    * **Dynamic Columns:** Automatically detects columns from your CSV.
    * **Custom Visibility:** Toggle any column on/off (e.g., hide `Cost_Price`, show `Retail_Price`).
    * **Smart Sorting:** Configure primary and secondary sorting (e.g., Sort by `Category` then `Price`).
    * **Drag-and-Drop:** Easily reorder columns to customize the display layout.
* **Smart Kiosk Mode:**
    * **Auto-Pagination:** Automatically cycles through pages of products if they don't fit on one screen.
    * **Dynamic Titles:** Option to use the primary sort value (e.g., "Drinks", "Snacks") as the page title, keeping the display context-aware.
    * **QR Code Integration:** Generates a QR code for customers to scan and view the menu on their own devices.
* **Offline Reliability:** The entire server, database (SQLite), and application run locally on the DigiPi. Menu updates and display functions are independent of the internet.
* **Dual-Network Security:** Operates on two segregated networks: a **Private Network** for staff/admin, and a **Public Hotspot** for customers, ensuring zero risk of customer access to internal systems.
* **Zero-Wire Scalability:** A single DigiPi Master can serve unique, independent menus to multiple display screens via unique local URLs (e.g., `http://digipi-xxxx.local/2`).
* **Unique Local Addressing:** Automatically assigns a unique hostname like `http://digipi-xxxx.local/` (derived from the MAC address) to prevent network conflicts when running multiple DigiPi units.
* **Customer Engagement Hotspot:** Features a captive portal to direct customers connecting to the public Wi-Fi directly to your store's official online URL.

---

## 🛠️ Installation and Setup

### Prerequisites
* Raspberry Pi (or similar SBC) with Wi-Fi capability.
* Raspberry Pi OS (or equivalent Linux distribution).
* Standard Python 3 environment (Flask, Pandas).

### Initial Provisioning (First Boot)

1.  **Power On:** Connect the DigiPi to power and a TV via HDMI.
2.  **Connect to AP:** The DigiPi will boot into a temporary AP mode. Scan the QR code displayed on the screen to connect your smartphone/laptop.
3.  **Configuration:** A captive portal will open. Follow the prompts to set up:
    * **Private Wi-Fi** credentials (for staff/admin network).
    * **Customer Hotspot** name and password.
    * **Online Store URL** for the captive portal redirect.
4.  **Launch:** The device will reboot, connect to your store's network, and automatically launch the full-screen menu browser.

---

## 🖥️ Usage

### Display Nodes (Customer View)
To connect additional screens:
1.  Connect the Display Node (e.g., Fire Stick) to the **Private Wi-Fi network**.
2.  Open the web browser and navigate to the Master DigiPi's unique URL (e.g., `http://digipi-xxxx.local/`).
3.  For different menus on different TVs, use the custom view URLs (e.g., `http://digipi-xxxx.local/3`).
4.  Switch the browser to **full-screen kiosk mode**.

### Admin Panel (Staff Management)
Access the management portal from any device on the private network:
1.  Open a browser and navigate to `http://digipi-xxxx.local/admin`.
2.  **Upload Data:** Upload your product CSV. The system auto-detects columns.
3.  **Build Menu:** Use the Universal Menu Builder to toggle column visibility (`THC_Level`, `CBD_Level`), set product sorting, and drag-and-drop columns to reorder them.
4.  **Display Settings:** Configure Kiosk Mode, including auto-pagination speed, items per page, and dynamic titles. Generate a QR code for your menu.
5.  **Multi-Display:** Use the tabbed interface to create and manage independent menus for all connected screens.
6.  **Live Preview:** Instantly see exactly what the customer screen is displaying.

---

## 🤝 Contributing

DigiPi is an open-source project. We welcome contributions from developers, designers, and documentation writers!

1.  Fork the repository.
2.  Create a new feature branch (`git checkout -b feature/AmazingFeature`).
3.  Commit your changes (`git commit -m 'Add Amazing Feature'`).
4.  Push to the branch (`git push origin feature/AmazingFeature`).
5.  Open a Pull Request.

---

## ⚖️ License

Distributed under the MIT License. See `LICENSE` for more information.
