<?php
// La variable conexión contiene la función que conecta a la base de datos
$con = conectarDB();
// La variable sql contiene la consulta a la base de datos
$sql = "SELECT id, nombre, modelo, descripcion, imagen FROM motos";
// La variable result contiene la unión de las variables $sql y $con
$result = $con->query($sql);
?>

<?php
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="card" style="background-color: white;">';
        echo '<div class="card-img">';
        echo '<img src="admin/img/' . htmlspecialchars($row["imagen"]) . '" alt="' . htmlspecialchars($row["nombre"]) . '">';
        echo '</div>';
        echo '<h3>' . htmlspecialchars($row["nombre"]) . '</h3>';
        echo '<p> Modelo: ' . htmlspecialchars($row["modelo"]) . '</p>';
        echo '<p>' . htmlspecialchars($row["descripcion"]) . '</p>';
        echo '</div>';
    }
} else {
    echo '<h3>No se encontraron motos</h3>';
}
?>
