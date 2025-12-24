# 📝 Project Scratchpad

## 🚀 Current Status
**Phase:** Architecture Pivot & Initialization
**Stack:** PHP 7.4+, MySQL 5.7+, Apache/Nginx
**Target:** Raspberry Pi (LAMP) & Standard Hosting (cPanel)

## 📂 Directory Structure
- `/database`: SQL schemas.
- `/public`: Web root (Admin & Client views).
- `/public/assets`: Static resources (CSS, JS, Uploads).
- `/public/includes`: Shared PHP logic.

## 📋 Immediate To-Do List
- [x] **Database:** Create `database/database.sql` (Products, Settings, Displays tables).
- [x] **Config:** Create `public/config.php` (DB Connection).
- [x] **Frontend:** Create `public/index.php` (Basic routing/display).
- [x] **Frontend:** Create root `index.html` as standalone CSV viewer (No PHP required).
- [x] **Admin:** Create `public/admin/index.php` (Dashboard).
- [ ] **Admin:** Create `public/admin/upload.php` (CSV Import Logic).

## 🧠 Context Notes
- Pivot from Python/Flask to PHP/MySQL completed in documentation.
- System must support "Universal" CSV ingestion (EAV or JSON storage).
- Offline-first priority.