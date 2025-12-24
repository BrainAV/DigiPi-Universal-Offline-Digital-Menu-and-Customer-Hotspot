-- DigiPi Database Schema
-- Version: 1.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Table structure for table `products`
-- Stores imported CSV data. 'data' column holds dynamic fields (Price, THC, etc.) as JSON.
--
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uuid` varchar(36) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `data` json DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `uuid` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Table structure for table `settings`
-- Global system configuration (Store Name, Wi-Fi SSID, etc.)
--
CREATE TABLE IF NOT EXISTS `settings` (
  `setting_key` varchar(50) NOT NULL,
  `setting_value` text DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`setting_key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Default Settings
--
INSERT INTO `settings` (`setting_key`, `setting_value`) VALUES
('store_name', 'My DigiPi Store'),
('wifi_ssid', 'DigiPi_Hotspot'),
('kiosk_mode', '1'),
('refresh_interval', '30');

--
-- Table structure for table `displays`
-- Manages multiple screens (e.g., ?display=1, ?display=2)
--
CREATE TABLE IF NOT EXISTS `displays` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `display_identifier` varchar(50) NOT NULL COMMENT 'URL slug (e.g. 1, 2) or MAC',
  `name` varchar(100) NOT NULL DEFAULT 'New Display',
  `config` json DEFAULT NULL COMMENT 'Per-display settings (hidden cols, sort)',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `display_identifier` (`display_identifier`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

COMMIT;