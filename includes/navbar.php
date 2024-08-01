<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>LEATHER MOTO</title>
  <link rel="stylesheet" href="styles.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="container">
      <a class="logo" ondblclick="showLoginPanel()">LEATHER MOTO</a>
      <div class="nav-links">
        <a href="./index.php">Inicio</a>
        <a href="./productos.php">Productos</a>
      </div>
    </div>
  </nav>

  <script>
    function showLoginPanel() {
      window.location.href = "./admin/login.php";
    }
  </script>