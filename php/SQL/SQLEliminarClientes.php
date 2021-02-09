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
                include("../Conexion.php");
                //include("ModificarEliminarClientes.php");
                $conexion = conectar();

                ## Traemos los datos a guardar en la BD "variable = $_POST[variable];"
                $Id = $_POST["ID"];

                ##Mandamos a llamar la función para modificar
                EliminarClientes($Id);

                ## Bloque de codigo para modificar los clientes
                function EliminarClientes($Id){

                    ## Abriendo Conexion para realizar la consulta
                    $conexion = conectar();
                    ## Variables
                    $Fecha = "";
                    ##Mandamos a llamar la funcion para Obtener la Fecha
                    $FechaActual = ObtenerFechaActual($Fecha);
                    ##echo "La fecha actual es: $FechaActual";

                    $sql = "delete from clientes where ID =$Id";
                    ##$sql = "update clientes set Nombre='$Nombre',Plazos=$Plazos,Monto_Prestamo=$MontoPrestamo where ID =$Id";
                    $resultado = $conexion->query($sql);

                    echo "<h1> Se realizo la Eliminacion del cliente.";
 
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
        <a href="../ModificarClientes.php">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
        </a>

    
</body>
</html>
