<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bienvenido a tu app web</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
  <?php require 'partials/header.php' ?>

  <?php if(!empty($user)): ?>
      <br>Bienvenidos. <?= $user['email']; ?>
      <br>Has iniciado sesión correctamente
      <br><br><br><br><br>
      <center>
        <button>
          <a href="alumnoA.php">
            Alumno
          </a>
        </button>
        <button>
          <a href="productosP.php">Productos</a>
        </button>
      </center>
      
      
  <?php endif; ?>

  <!-- <button>
    <a href="alumno.php">
      Alumno
    </a>
  </button> -->
  
  </body>
</html>
