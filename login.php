<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php require('estilos.php'); ?>
    <title>Document</title>
</head>

<body class="grey-darken-2">
    <div class="row">
        <nav>
            <div class="nav-wrapper">
                <a href="#" class="brand-logo">Logo</a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="sass.html">                                    <?php
include "model/coneccion.php";

?></a></li>
                    <li><a href="badges.html"><?php include "controller/controlador_login.php"?> ?:</a></li>
                    <li><a href="collapsible.html">JavaScript</a></li>
                </ul>
            </div>
        </nav>
        <div class="container">
            <div class="row">
                <div class="col s12 m6">
                    <div class="card white sombra darken-1">
                        <div class="card-content white-text">
                            <div class="row">
                                <form class="col s12" method="post">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <input placeholder="Placeholder" id="nombre" type="text" name="nombre" class="validate">
                                            <label for="nombre">Nombre usuario</label>
                                        </div>
                                        <div class="input-field col s12">
                                            <input value="" id="clave" type="password" name="clave" class="validate">
                                            <label for="clave">Contraseña</label>
                                        </div>
                                    </div>
                                    <div class="row">

                                    <div class="col-12 mt-2 mb-2">
              <button class="btn btn-primary" name="enviar" type="submit">Enviar</button>
            </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
</body>

</html>