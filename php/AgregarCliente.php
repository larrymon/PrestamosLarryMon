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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css"  />

</head>
<body>
        <?php

        ## Realizar Conexion
        include("Conexion.php");
        $conexion = conectar();

        ## Traemos los datos a guardar en la BD "variable = $_POST[variable];"
        $NombreCliente = $_POST["Nombre"];
        $PlazoPagar = $_POST["Plazo"];
        $MontoPagar = $_POST["Monto"];

        ##Mandamos a llamar la Funcion para Guardar
        RegistrarPrestamoCliente($NombreCliente,$PlazoPagar,$MontoPagar);

        ## Bloque de codigo para guardar el prestamo
        function RegistrarPrestamoCliente($NombreCliente,$PlazoPagar,$MontoPagar){

            ## validar que nungun dato venga vacio
            if($NombreCliente != "" and $PlazoPagar != "" and $MontoPagar != "")
            {
                ## Abriendo Conexion para realizar la consulta
                $conexion = conectar();
                ## Variables
                $Fecha = "";
                ##Mandamos a llamar la funcion para Obtener la Fecha
                $FechaActual = ObtenerFechaActual($Fecha);
                ##echo "La fecha actual es: $FechaActual";
                
                $sql = "insert into clientes (Nombre, Monto_Prestamo, Plazos, Fecha) VALUES ('$NombreCliente',$MontoPagar,$PlazoPagar,'$FechaActual')";
                
                ## Metodo que realiza la consulta a BD y la guarda.
                if ($resultado = $conexion->query($sql)) {
                    ## ¡Oh, no! La consulta falló, no pudo realizar la conexion a BD. 
                    echo "Se guardo el Prestamo del cliente $NombreCliente a $PlazoPagar semanas por la cantidad de $MontoPagar.";
                    ##exit;
                    
                }
                ## Si no encuentra Registros
                elseif ($resultado->num_rows === 0) {
                    echo "Error: " . $sql . "<br>" . query($sql);
                    ##exit;
                    
                }
                ## Cerramos la conexion
                ##$resultado->free();
                $conexion->close();
            }
            else{

                echo "<h1> Favor de proporcionar un valor valido. </h1><br>";

            }

        }

        function ObtenerFechaActual($Fecha){
            ## Metodo pora obtener la fecha 
            ## 2001-03-10 17:16:18 (el formato DATETIME de MySQL)
            $Fecha = date("Y-m-d H:i:s");

            ##echo "La fecha actual es: $Fecha";

            return $Fecha;
        }
        ?>

        <!--Mandando a llamar el menu-->
        <a href="../menu.html">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Regresar</button>
        </a>

    
</body>
</html>

