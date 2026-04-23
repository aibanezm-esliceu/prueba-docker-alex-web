PHP
<?php 
// Cambiamos el título para esta página en concreto
$pageTitle = "Acerca de - Examen PHP";
require __DIR__ . "/includes/header.php"; 
?>

<h1>Acerca de RetroVinilos</h1>
<p>Tienda que fue fundada en 1995, para retros y para no tan retros.</p>
<p>Entorno virtualizado con Docker que incluye:</p>
<ul>
    <li>Un servidor web con PHP 8.2</li>
    <li>Una base de datos MariaDB 11</li>
    <li>phpMyAdmin para gestionar la base de datos</li>
    <li>BrowserSync para la recarga automática</li>
</ul>

<?php 
// Cerramos la página llamando al footer
require __DIR__ . "/includes/footer.php"; 
?>

