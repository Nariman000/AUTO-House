<?php
$host = 'localhost'; // или IP-адрес вашего сервера
$db   = 'report_system';
$user = 'root'; // ваш пользователь
$pass = ''; // ваш пароль

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}
?>