<?php 
$pageTitle = "Contacto";
require __DIR__ . "/includes/header.php"; 
?>
<h1>Realiza el pedido</h1>
<form action="create-contact.php" method="POST">
    <label>Cliente:</label> <input type="text" name="client" required>
    <label>Email:</label> <input type="email" name="email" required>
    <label>Disco buscado:</label> <input type="text" name="disco_buscado" required>
    <label>Mensaje:</label> <textarea name="missatge" rows="4" required></textarea>
    <button type="submit">Enviar</button>
</form>
<?php require __DIR__ . "/includes/footer.php"; ?>
