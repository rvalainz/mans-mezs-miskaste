<?php
declare(strict_types=1);

$dsn = 'mysql:host=db;dbname=mans_mezs;charset=utf8mb4';
$dbUser = 'mans_user';
$dbPass = 'mans_pass';

try {
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (PDOException $e) {
    die('Database connection failed: ' . htmlspecialchars($e->getMessage(), ENT_QUOTES, 'UTF-8'));
}
