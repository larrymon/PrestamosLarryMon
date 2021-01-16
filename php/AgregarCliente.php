<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta</title>
    
    <!--Instalando la Fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"  />

</head>
<body>
        <?php

        ## Realizar Conexion
        include("Conexion.php");
        $conexion = conectar();

        ?>

        <!--Mandando a llamar el menu-->
        <a href="../menu.html">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
        </a>

    
</body>
</html>

