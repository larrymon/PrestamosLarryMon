<?php 
    include("Conexion.php");
    $buscar = (isset($_GET['buscar'])) ? $_GET['buscar'] : '';
    ## Abriendo Conexion para realizar la consulta
    $conexion = conectar();

    ## Consulta información
    $sql = "SELECT ID,Nombre,Monto_Prestamo,Plazos,Fecha FROM clientes WHERE Nombre LIKE '%$buscar%'";
    $resultado = $conexion->query($sql);

?>


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
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="../css/styles.css"  />
</head>
<body>
        <!--PARA BUSCAR OTRO CLIENTE - MANDA A LLAMAR LA CLASE OTRA VEZ-->
        <form action="ConsultarCliente.php">    
            <input type="text" name="buscar" value="<?php echo $buscar ?>"><!--Muestra lo ultimo que se busco.-->
            <button type="submit">Buscar</button>
        </form></br>

        <!--TABLA QUE RETORNA LOS CLIENTES-->
        <table width="45%" height="25%" border="3" style="text-align:center;">
            <thead> 
                <th>ID</th>
                <th>Nombre</th>
                <th>Monto Prestamo</th>
                <th>Plazos</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </thead>
            <tbody>

                <?php
                    while($row = $resultado->fetch_array(MYSQLI_ASSOC)){
                        //echo print_r($row);
                ?>
                <tr>
                    <td><?php echo $row['ID'] ?></td>
                    <td><?php echo $row['Nombre'] ?></td>
                    <td><?php echo $row['Monto_Prestamo'] ?></td>
                    <td><?php echo $row['Plazos']?></td>
                    <td><?php echo $row['Fecha']?></td>
                    <td>
                        <!-- Redireccionar a Modificar y Eliminar -->
                        <a href="./ConsultarCorrida.php?id=<?php echo $row['ID']?>"> <button type="button">Corrida</button></a>
                        <a href="./ModificarClientes.php?id=<?php echo $row['ID']?>"><button type="button">Editar</button></a>
                        <a href="./EliminarClientes.php?id=<?php echo $row['ID']?>"><button type="button">Eliminar</button></a>
                        <!-- <button type="submit">Eliminar</button> -->
                    </td>
                </tr>
                <?php }?>

            </tbody>
        </table></br>

        <!--Mandando a llamar el menu-->
        <a href="../menu.html">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action"> Regresar al Menu Principal</button>
        </a>

    
</body>
</html>

