<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación</title>
    
    <!--Instalando la Fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css"/>

</head>
<body>
        
            <?php
                include("Conexion.php");
                //include("ConsultarCliente.php");
                $conexion = conectar();

                $Nombre = $_POST["Nombre"];
                $MontoPrestamo = $_POST["Monto_Prestamo"];
                $Plazos = $_POST["Plazos"];

                echo $Nombre;
                echo $MontoPrestamo;
                echo $Plazos;
            ?>
        
        <!--Mandando a llamar el menu-->
        <a href="ModificarEliminarClientes.php">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
        </a>

    
</body>
</html>



