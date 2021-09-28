<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Guardar</title>
</head>
<body>
<center>
    <h2>Formulario de entrada</h2>

    <?php
        include 'conexion.php';
        $id=$_REQUEST['id'];
                $sql="select * from personas where id_persona='$id' ";
                $resultado= mysqli_query($conexion,$sql);
                $row= mysqli_fetch_assoc($resultado);
                
    ?>

    <form action="proceso_editar.php?id=<?php echo $row['id_persona']; ?>" method="post">

    <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $row['nombre'];?>" REQUIRED> <br><br>
    <input type="text" name="apellido" placeholder="Apellido..." value="<?php echo $row['apellido'];?>" REQUIRED><br><br>
    <input type="text" name="email" placeholder="Email..." value="<?php echo $row['email'];?>" REQUIRED><br><br>
    <input type="text" name="telefono" placeholder="Telefono..." value="<?php echo $row['telefono'];?>" REQUIRED><br><br>
    <input type="submit" name="enviar" value="aceptar"><br>
    </form>
</center>
</body>
</html>