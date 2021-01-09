<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
</head>
<body>

        <?php

        ##conexion a BD
        function conectar(){
            $usuario = "root";
            $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
            $servidor = "127.0.0.1";
            $basededatos = "test";

            $conexion = new mysqli($servidor,$usuario,$contrasena,$basededatos);
            $conexion->set_charset("utf8");

            return $conexion;
        }

        
        // $conexion = mysql_connect($servidor,$usuario,$contrasena) or die ("Error al conectar a la base de datos.".mysql_error());
        // mysql_select_db($basededatos,$conexion);

        ##conexion a BD
        // $usuario = "";
        // $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
        // $servidor = "localhost";
        // $servidor = "";
        // $basededatos = "";
        
        // $conexion = mysql_connect($servidor,$usuario,$contrasena);
        
        // if ($conexion == true) {
        //     echo "<p>MySQL le ha dado permiso a PHP para ejecutar consultas con ese usuario y clave</p>";
        // } else {
        //     echo "<p>MySQL no conoce ese usuario y password, y rechaza el intento de conexión</p>";
        // }
        
        ?>
</body>
</html>