PHP
<?php
try {
    $pdo = new PDO(
        "mysql:host=db;dbname=vinilos_php",
        "vinilos_user",
        "retro123",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
} catch (PDOException $e) {
    die("Error de conexión: " . $e->getMessage());
}
?>
