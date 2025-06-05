<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
function connectDB() {
    $host = 'localhost';
    $port = '3307'; // pour MAMP
    $dbname = 'librairiexyz';
    $username = 'root';
    $password = 'root'; // MAMP

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname;charset=utf8mb4", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } catch (PDOException $e) {
        die("Erreur de connexion : " . $e->getMessage());
    }
}


function sanitizeInput($data) {
    return htmlspecialchars(trim($data));
}

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}
?>
