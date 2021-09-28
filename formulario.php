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
    <form action=guardar_form.php method="post">
    <input type="text" name="nombre" placeholder="Nombre..." value="" REQUIRED> <br><br>
    <input type="text" name="apellido" placeholder="Apellido..." value="" REQUIRED><br><br>
    <input type="text" name="email" placeholder="Email..." value="" REQUIRED><br><br>
    <input type="text" name="telefono" placeholder="Telefono..." value="" REQUIRED><br><br>
    <input type="submit" name="enviar" value="aceptar"><br>
    
    </form>
</center>
</body>
</html>