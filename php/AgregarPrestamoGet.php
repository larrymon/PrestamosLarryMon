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
        include("backend.php");
        $conexion = conectar();
        

        $id = 1; 
        $sql = "SELECT ID,Nombre,Monto_Prestamo,Plazos,Fecha FROM clientes WHERE ID = $id";

        // if (!$resultado = $mysqli->query($sql)) {
        ## Metodo que realiza la consulta a BD y la guarda. 
        if (!$resultado = $conexion->query($sql)) {
            // ¡Oh, no! La consulta falló. 
            echo "Lo sentimos, este sitio web está experimentando problemas.";
        
            // De nuevo, no hacer esto en un sitio público, aunque nosotros mostraremos
            // cómo obtener información del error
            // echo "Error: La ejecución de la consulta falló debido a: \n";
            // echo "Query: " . $sql . "\n";
            // echo "Errno: " . $mysqli->errno . "\n";
            // echo "Error: " . $mysqli->error . "\n";
            exit;
        }
        ## Si no encuentra Registros
        if ($resultado->num_rows === 0){
            echo "<h1> Lo sentimos. No se pudo encontrar una coincidencia para el ID $id. Inténtelo de nuevo. </h1>";
            exit;
        }
        

        $clientes = $resultado->fetch_assoc();
        echo "<h2> El nombre de cliente es: </h2><h1>" . $clientes['Nombre'] . "</h1><h2>Solicito un prestamo de</h2><h1>" . $clientes['Monto_Prestamo'] . "</h1><h2>a</h2><h1> " . $clientes['Plazos'] . "</h1><h2>Semanas. </h2>";



        // El script automáticamente liberará el resultado y cerrará la conexión
        // a MySQL cuando finalice, aunque aquí lo vamos a hacer nostros mismos
        $resultado->free();
        $conexion->close();

        // echo "Se realizó la conexion exisotamente."
        //  $consulta = $mysqli->query("SELECT * FROM personas");
        //     while($f = $consulta->fetch_object()){
        //     echo $f->nombre.' <br/>';
        //     }
        ?>

        <!--Mandando a llamar el menu-->
        <a href="../menu.html">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
        </a>

    
</body>
</html>

