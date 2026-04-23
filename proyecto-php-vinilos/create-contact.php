<?php
// 1. Comprobar método POST
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "No se han recibido datos del formulario.";
    exit;
}

// 2. Recoger variables EXACTAS del formulario
$cliente = $_POST["client"] ?? "";
$email = $_POST["email"] ?? "";
$disco = $_POST["disco_buscado"] ?? "";

// 3. Conexión a BD
require __DIR__ . "/db.php";

// 4. Insertar datos en la NUEVA tabla 'pedidos'
try {
    $sql = "INSERT INTO pedidos (cliente, email, disco_buscado) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    
    // AQUÍ ESTABA EL FALLO: Todas llevan el $ delante
    $result = $stmt->execute([$cliente, $email, $disco]);

    // 5. Mostrar éxito
    if ($result) {
        require __DIR__ . "/includes/header.php"; 
        echo "<h1 style='color: #d35400;'>¡Pedido recibido correctamente!</h1>";
        echo "<p>Buscaremos tu vinilo y te avisaremos.</p>";
        echo "<a href='contacte.php' style='color: #c0392b; font-weight: bold;'>Volver</a>";
        require __DIR__ . "/includes/footer.php";
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>











