<?php
            include("Conexion.php");
            //include("ConsultarCliente.php");
            $conexion = conectar();

            ## Traemos los datos a guardar en la BD "variable = $_POST[variable];"
            //$id = $_POST['id'];
            $id = (isset($_GET['id'])) ? $_GET['id'] : '';
            $sql = "SELECT * FROM Clientes where ID = '$id'";
            $resultado = $conexion->query($sql);
            $row = $resultado->fetch_array(MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificación/Eliminación</title>
    
    <!--Instalando la Fuente-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"  />

</head>
<body>
    <div>
        <h1>Editar Clientes</h1>
        <br><br>
        <form action="" method="POST">
            <input type="text" value="<?php echo $row['Nombre'] ?>">
            <input type="text" value="<?php echo $row['Nombre'] ?>">
            <input type="text" value="<?php echo $row['Nombre'] ?>">

        </form>


    </div>

    
</body>
</html>

