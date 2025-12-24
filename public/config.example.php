<?php
// Database Credentials
define('DB_HOST', 'localhost');
define('DB_NAME', 'digipi');
define('DB_USER', 'root');
define('DB_PASS', ''); // Update this in production

// Application Settings
define('APP_ROOT', __DIR__);
define('ASSETS_URL', 'assets');

// Error Reporting (Disable in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Database Connection
try {
    $pdo = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4", DB_USER, DB_PASS);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("CRITICAL ERROR: Could not connect to the database. " . $e->getMessage());
}
?>