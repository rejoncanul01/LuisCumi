<header>
  Universidad Tecnológica del Poniente
  

    <?php if(!empty($user)): ?>
      <!-- <br>Bienvenidos. <?= $user['email']; ?>
      <br>Has iniciado sesión correctamente
      <br> -->

      <br>
      <button>
        <a href="logout.php">
        Logout
        </a>
      </button>
      
    <?php else: ?>
      <h1>Ingresa o Registrate</h1>
      
      <button>
        <a href="login.php">Iniciar sesión</a> o
      </button>
      <button>
        <a href="signup.php">Registrarse</a>
      </button>
    <?php endif; ?>
</header>