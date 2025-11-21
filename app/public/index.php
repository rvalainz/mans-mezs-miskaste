<?php
    declare(strict_types=1);
    require __DIR__ . '/../db.php';
    $stmt = $pdo->query('SELECT NOW() AS `cur_time`');
    $row = $stmt->fetch();
    $currentTime = $row['cur_time'] ?? 'Error: Time not fetched';

    ?>
<!DOCTYPE html>
<html lang="lv">
<head>
    <meta charset="UTF-8">
    <title>Mans mežš miskastē – Docker test</title>
</head>
<body>
    <h1>Mans mežš miskastē</h1>
    <p>Hello from Docker. If you see this, your PHP + Apache container is working.</p>
    <p>Time from database: <?php echo htmlspecialchars($currentTime, ENT_QUOTES, 'UTF-8'); ?></p>
</body>
</html>