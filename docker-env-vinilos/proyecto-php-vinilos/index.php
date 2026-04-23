PHP
<?php 
// Definimos el título de la pestaña antes de llamar al header
$pageTitle = "Inicio - Examen PHP";
require __DIR__ . "/includes/header.php"; 
?>

<h1>Bienvenido a la tienda</h1>
<p>Bienvenido al proyecto principal del examen. Puedes navegar por las diferentes secciones utilizando el menú superior.</p>
<p>Todo el diseño está controlado por nuestra hoja de estilos centralizada (style.css).</p>

<?php 
// Cerramos la página llamando al footer
require __DIR__ . "/includes/footer.php"; 
?>
