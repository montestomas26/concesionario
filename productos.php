<?php include './includes/navbar.php';
include './db/db.php';

$db = conectarDB()

?>

<!-- Hero Section -->
<section id="hero" class="hero">
  <h1>Nuestras Motos</h1>
  <p>
    Descubre nuestra amplia selección de motocicletas en nuestra tienda
    especializada.
    <br> Encuentra la moto perfecta que se adapte a tus
    necesidades y estilo de conducción.
  </p>
</section>

<!-- Tarjetas Section -->
<section id="tarjetas" class="tarjetas">
  <div class="container">
    <h2>MOTOS EN VENTA</h2>
    <div class="cards">

      <?php include './includes/motos.php' ?>


    </div>
  </div>
</section>
</body>

</html>