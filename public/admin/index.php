<?php
require_once '../includes/functions.php';

$product_count = get_product_count();
$store_name = get_setting('store_name');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiPi Admin - Dashboard</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
</head>
<body>
    <div class="container">
        <h1>DigiPi Admin Panel</h1>
        
        <div class="card">
            <h2>Welcome to <?php echo h($store_name); ?></h2>
            <p>Manage your digital menu, displays, and system settings.</p>
            
            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px; margin-top: 20px;">
                <!-- Stats Card -->
                <div style="background: #f8f9ff; padding: 20px; border-radius: 8px; text-align: center;">
                    <h3 style="margin: 0; font-size: 3rem; color: #667eea;"><?php echo $product_count; ?></h3>
                    <p style="margin: 0;">Total Products</p>
                </div>

                <!-- Quick Actions -->
                <div style="display: flex; flex-direction: column; justify-content: center; gap: 10px;">
                    <a href="upload.php" class="btn-primary" style="text-align: center; text-decoration: none;">
                        Upload New Menu (CSV)
                    </a>
                    <a href="../index.php" target="_blank" class="btn-primary" style="text-align: center; text-decoration: none; background: #fff; color: #667eea; border: 2px solid #667eea;">
                        View Live Menu
                    </a>
                </div>
            </div>
        </div>

        <div class="card" style="margin-top: 20px;">
            <h2>System Status</h2>
            <div class="info">
                <ul>
                    <li><strong>Database:</strong> Connected (MySQL)</li>
                    <li><strong>Server Time:</strong> <?php echo date('Y-m-d H:i:s'); ?></li>
                    <li><strong>PHP Version:</strong> <?php echo phpversion(); ?></li>
                </ul>
            </div>
        </div>

        <div style="text-align: center; margin-top: 30px;">
            <p>
                <a href="settings.php" class="link-btn">System Settings</a> | 
                <a href="displays.php" class="link-btn">Manage Displays</a>
            </p>
        </div>
    </div>
</body>
</html>