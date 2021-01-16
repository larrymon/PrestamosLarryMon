<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Cliente</title>
    
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

        ## Traemos el nombre a buscar del Formulario
        $NombreBuscar = $_POST["NombreBuscar"];
        ## Mandamos a llamar la funcion
        buscarcliente($NombreBuscar);

        ## Bloque de codigo para buscar Cliente
        function buscarcliente($NombreBuscar){

            ## Abriendo Conexion para realizar la consulta
            $conexion = conectar();
            $sql = "SELECT ID,Nombre,Monto_Prestamo,Plazos,Fecha FROM clientes WHERE Nombre like '$NombreBuscar'";

            ## Metodo que realiza la consulta a BD y la guarda. 
            if (!$resultado = $conexion->query($sql)) {
                // ¡Oh, no! La consulta falló. 
                echo "Lo sentimos, este sitio web está experimentando problemas.";
                ##exit;
                
            }
            ## Si no encuentra Registros
            elseif ($resultado->num_rows === 0) {
                echo "<h1> Lo sentimos. No se pudo encontrar una coincidencia con el nombre $NombreBuscar. Favor de validar la información. </h1>";
                ##exit;
                
            }
            else{
                $clientes = $resultado->fetch_assoc();
                echo "<h2> El nombre de cliente es: </h2><h1>" . $clientes['Nombre'] . "</h1><h2>Solicito un prestamo de</h2><h1>" . $clientes['Monto_Prestamo'] . "</h1><h2>a</h2><h1> " . $clientes['Plazos'] . "</h1><h2>Semanas. </h2>";
            }

            $resultado->free();
            $conexion->close();

        }

        ?>

        <!--Mandando a llamar el menu-->
        <a href="../menu.html">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
        </a>

    
</body>
</html>

