<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DigiPi Menu</title>
    <link rel="stylesheet" href="<?php echo ASSETS_URL; ?>/css/style.css">
</head>
<body>
    <div class="container">
        <h1>DigiPi Menu System</h1>
        <div id="menu-content">
            <div class="loading">
                <p>System is online.</p>
                <p>Database connection: <?php echo isset($pdo) ? 'Active' : 'Failed'; ?></p>
            </div>
        </div>
    </div>
</body>
</html>