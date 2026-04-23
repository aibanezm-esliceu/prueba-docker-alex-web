
<?php 
$pageTitle = "Pedidos de discos";
require __DIR__ . "/includes/header.php"; 
?>
<h1>Pedidos</h1>
<table>
  <tr><th>ID</th><th>Título</th><th>Artista</th><th>Género</th></tr>
    <?php
    require __DIR__ . "/db.php";
    try {
        $stmt = $pdo->query("SELECT * FROM discos");
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['titulo'] . "</td>";
            echo "<td>" . $row['artista'] . "</td>";
            echo "<td>" . $row['genero'] . "</td>";
            echo "</tr>";
        }
    } catch (Exception $e) {
        echo "<tr><td colspan='3'>Error: " . $e->getMessage() . "</td></tr>";
    }
    ?>
</table>
<?php require __DIR__ . "/includes/footer.php"; ?>
