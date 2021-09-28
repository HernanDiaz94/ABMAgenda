<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mostrar</title>
</head>
<body>
<center>
    <table border="3" bgcolor="#F0FFAA">
    <thead>
    <tr>
    <th colspan="1"><a href="formulario.php">Agregar usuario</th>
    <th colspan="6">Lista usuarios</th>
    </tr>
    </thead>
    <tbody>
        <tr>
        <td>ID</td>
        <td>NOMBRE</td>
        <td>APELLIDO</td>
        <td>EMAIL</td>
        <td>TELEFONO</td>
        <td colspan="2">Operaciones</td>
        </tr>
        <?php
                include 'conexion.php';

                $sql="select * from personas";
                $resultado= mysqli_query($conexion,$sql);
                while( $row= mysqli_fetch_assoc($resultado) )
                {
        ?>

                    <tr>
                        <td> <?php echo $row['id_persona'];   ?> </td>
                        <td> <?php echo $row['nombre'];       ?> </td>
                        <td> <?php echo $row['apellido'];     ?> </td>
                        <td> <?php echo $row['email'];        ?> </td>
                        <td> <?php echo $row['telefono'];     ?> </td>

                        <td> <a href="editar.php?id=<?php echo $row['id_persona'];?>"> EDITAR </a></td>
                        <td> <a href="borrar.php?id=<?php echo $row['id_persona'];?>"> BORRAR </a></td>
                    </tr>
        <?php   }        ?>
    </tbody>
    </table>
</center>
</body>
</html>