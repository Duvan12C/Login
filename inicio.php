<?php
session_start();
if (empty($_SESSION["ID"])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('estilos.php'); ?>
    <title>Document</title>
</head>
<body>
<nav>
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"><i class="material-icons">cloud</i><?php echo $_SESSION["nombre"].$_SESSION["apellido"]?></a>
      <ul class="right hide-on-med-and-down">
      <li><a class="waves-effect waves-light btn" href="controller/controlado_cerrar.php">Salir <i class="material-icons right">lock</i></a></li>
        <li><a href="sass.html"><i class="material-icons">search</i></a></li>
        <li><a href="collapsible.html"><i class="material-icons">refresh</i></a></li>
        <li><a href="mobile.html"><i class="material-icons">more_vert</i></a></li>
      </ul>
    </div>
  </nav>
  
    <div class="container">
  
    <div class="row">
        <div class="col s12 m7">
          <div class="card sombra">
            <div class="card-image">
              <img src="images/sample-1.jpg">
              <span class="card-title"></span>
            </div>
            <div class="card-content">
                <h3><?php echo $_SESSION["nombre"]?></h3>
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
