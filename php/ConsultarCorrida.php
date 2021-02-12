<?php
    include("Conexion.php");
    $conexion = conectar();

    $id = (isset($_GET['id'])) ? $_GET['id'] : null;
    if(!$id){
        header("Location: ConsultarCliente.php");
    }
    $sql = "SELECT * FROM Clientes where ID = '$id'";
    $resultado = $conexion->query($sql);
    $row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Corrida</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Instalando la Fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css"  />
</head>
<body>
    

    <!--Mandando a llamar el menu-->
    <a href="ConsultarCliente.php">
        <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Regresar a Busqueda</button>
    </a>

</body>
</html>

