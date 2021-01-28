<?php
            include("Conexion.php");
            //include("ConsultarCliente.php");
            $conexion = conectar();

            ## Traemos los datos a guardar en la BD "variable = $_POST[variable];"
            //$id = $_POST['id'];
            //$id = (isset($_GET['id'])) ? $_GET['id'] : '';
            $id = (isset($_GET['id']));
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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css"  />

</head>
<body>
    <div>
        <h1>Editar Clientes</h1>
        <br><br>
        <form action="SQLModificarCliente.php" method="POST">
            <h5>Nombre:         <?php echo $row['Nombre'] ?>         </h5> <input type="text" name="Nombre"><br>
            <h5>Monto Prestamo: <?php echo $row['Monto_Prestamo'] ?> </h5> <input type="number" name="Monto_Prestamo"><br>
            <h5>Plazos:         <?php echo $row['Plazos'] ?>         </h5> <input type="number" name="Plazos"><br>
            <input type="submit" value="Actualizar">
        </form>
    </div><br><br>

    <!--Mandando a llamar el menu-->
    <a href="ConsultarCliente.php">
        <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
    </a>

    
    <?php
               echo "<br><br><br>";
               echo "Final!!! <br><br><br>";
               print_r($row);
                // if(isset($_POST['submit'])){
                //     $row = array("id"=>['ID'],
                //                     "Nombre"=>['Nombre'],
                //                     "Monto_Prestamos"=>['Monto_Prestamo'],
                //                     "Plazos"=>['Plazos']);
                //     print_r($row);
    
                //      //$ModificacionSQL = "update Clientes set Nombre=$campos=>['Nombre'],Monto_Prestamos=$campos=>['Monto_Prestamo'],Plazos=$campos=>['Plazos'] where ID=$campos=>['ID']";
                // }
                // else{
                //     echo "nada";
                // }
    ?>

</body>
</html>

