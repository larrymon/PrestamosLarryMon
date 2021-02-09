<?php
            include("Conexion.php");
            //include("ConsultarCliente.php");
            $conexion = conectar();

            ## Traemos los datos a guardar en la BD "variable = $_POST[variable];"
            //$id = $_POST['id'];
            //$id = (isset($_GET['id'])) ? $_GET['id'] : '';
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminación</title>
    
    <!--Instalando la Fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css"  />

</head>
<body>
    <div>
        <h1>Eliminar Clientes</h1>
        <br><br>
        <form action="SQL/SQLEliminarClientes.php" method="POST">
            <h3>¿Estas seguro de querer eliminar el cliente?</h3><br>
            <h5>Nombre: <?php echo $row['Nombre'] ?> </h5><br>
            <h5>Monto Prestamo: <?php echo $row['Monto_Prestamo'] ?> </h5><br>
            <h5>Plazos: <?php echo $row['Plazos'] ?> </h5><br>
            <button type="submit" name="ID" value="<?php echo $row['ID'] ?>">Eliminar</button>
        </form>
    </div><br><br>


    <!--Mandando a llamar el menu-->
    <a href="ConsultarCliente.php">
        <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Regresar a Busqueda</button>
    </a>

</body>
</html>