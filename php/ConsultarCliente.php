<?php 
    include("Conexion.php");
    $buscar = (isset($_GET['buscar'])) ? $_GET['buscar'] : '';
    ## Abriendo Conexion para realizar la consulta
    $conexion = conectar();
    $sql = "SELECT ID,Nombre,Monto_Prestamo,Plazos,Fecha FROM clientes WHERE Nombre LIKE '%$buscar%'";
    $resultado = $conexion->query($sql);
    //$rows = ;


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
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <link type="text/css" rel="stylesheet" href="css/styles.css"  />

</head>
<body>
        <!--PARA BUSCAR OTRO CLIENTE-->
        <form action="ConsultarCliente.php">
            <input type="text" name="buscar" value="<?php echo $buscar ?>">
            <button type="submit">Buscar</button>
        </form></br>
        <!--TABLA QUE RETORNA LOS CLIENTES-->
        <table width="30%" height="20%" border="3" style="text-align:center;">
            <thead> 
                <th>Nombre</th>
                <th>Monto Prestamo</th>
                <th>Plazos</th>
                <th>Fecha</th>
                <th>Opciones</th>
            </thead>
            <tbody>

                <?php
                    while($row = $resultado->fetch_array(MYSQLI_ASSOC)){

                ?>
                <tr>
                    <td><?php echo $row['Nombre'] ?></td>
                    <td><?php echo $row['Monto_Prestamo'] ?></td>
                    <td><?php echo $row['Plazos']?></td>
                    <td><?php echo $row['Fecha']?></td>
                    <td>
                        <button>Editar</button>
                        <button>Eliminar</button>
                    </td>
                </tr>

                <?php }?>

            </tbody>
        </table></br>

        <!--Mandando a llamar el menu-->
        <a href="../menu.html">
            <button id="btnLogin" class="btn btn-large waves-effect waves-light" type="button" name="action">Pagina Principal</button>
        </a>

    
</body>
</html>

