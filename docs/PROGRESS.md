# DigiPi Development Progress

## Phase 1: Minimum Viable Product (MVP) - Core Functionality

### P1.1 Initial Server Setup ✅
- [x] PHP environment configured (LAMP/WAMP)
- [x] MySQL database schema imported (`database.sql`)
- [x] `config.php` created and connected
- [x] Basic `index.php` rendering
- [x] Directory structure initialized

### P1.2 Basic Data Handling ⏳
- [ ] PHP CSV parsing logic
- [x] Database class/PDO connection wrapper
- [ ] Simple HTML table view of products
- [ ] Dynamic column detection from CSV

### P1.3 Admin Panel MVP 🚧
- [x] Admin dashboard (`/admin/index.php`)
- [ ] File upload form (`/admin/upload.php`)
- [ ] Display for product list
- [ ] Success/error messaging
- [ ] Product count display

### P1.4 Network Provisioning ⏸️
- [ ] Temporary AP script
- [ ] Web configuration form for Wi-Fi credentials
- [ ] Auto-kiosk mode launch on HDMI
- **Note**: Deferred until deployment on Raspberry Pi hardware

---

## Phase 2: Enhanced Functionality and Universal Adaptability

### P2.1 Universal Menu Builder ⏳
- [ ] Admin UI to show/hide columns
- [ ] Sorting logic via URL parameters
- [ ] Field visibility settings stored in MySQL
- [ ] Column order configuration

### P2.2 Dynamic Display/Kiosk ⏳
- [ ] Non-scrolling, fixed-size table layout
- [ ] Timed JavaScript pagination (auto page-flipping)
- [ ] QR code generation for menu URL
- [ ] Configurable display duration per page
- [ ] Dynamic page title based on primary sort column

### P2.3 Multi-View Support ⏳
- [ ] Database schema updated for multiple configurations
- [ ] Admin UI tabbed interface for creating new views
- [ ] Unique view URLs (`/1`, `/2`, `/3`) implemented
- [ ] Per-view settings (columns, sorting, filtering)

### P2.4 Unique Hostname ⏳
- [ ] Script to generate unique hostname from MAC address
- [ ] `digipi-xxxx.local` hostname implementation
- [ ] mDNS/Avahi configuration
- **Note**: Requires Raspberry Pi hardware for testing

### P2.5 Visual Theming ⏳
- [ ] Database schema for theme selection
- [ ] 5 Pre-made CSS themes (Dark, Light, Chalkboard, Minimalist, Vibrant)
- [ ] Admin UI for theme selection
- [ ] Dynamic CSS loading in menu template

---

## Phase 3: Customer Engagement, Hotspot, and Pro-Plan Foundation

### P3.1 Customer Hotspot ⏳
- [ ] DigiPi configured as Access Point (AP)
- [ ] Traffic routing established
- [ ] Firewall for network isolation
- [ ] `hostapd` and `dnsmasq` configuration

### P3.2 Captive Portal ⏳
- [ ] Captive portal service active on public network
- [ ] HTML splash page with store URL redirect
- [ ] DNS hijacking for captive portal detection

### P3.3 Head Office Sync (Pro Foundation) ⏳
- [ ] Basic authentication and security hardening
- [ ] API documentation for remote sync
- [ ] Multi-location management foundation

### P3.4 Feature Polishing ⏳
- [ ] Live preview in Admin Panel
- [ ] User-friendly styling improvements
- [ ] Error handling and validation
- [ ] Production deployment guide

### P3.5 Advanced Customization ⏳
- [ ] Font family selection
- [ ] Font size controls
- [ ] Theme import/export functionality


---

## Legend
- ✅ Completed
- 🚧 In Progress
- ⏳ Not Started
- ⏸️ Deferred (requires hardware/deployment)

---

## Current Status Summary

**Completed**: Architecture Pivot & Planning, P1.1 Initial Server Setup
**In Progress**: Phase 1 (MVP) - Re-implementation in PHP
**Next Up**: P1.2 Basic Data Handling & P1.3 Admin Panel Logic

**Last Updated**: 2025-12-24 (v0.1.1 Release Prep)
