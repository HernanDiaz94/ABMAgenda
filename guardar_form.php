<?php
include 'conexion.php';

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];

$sql="INSERT INTO personas(nombre,apellido,email,telefono) VALUES('$nombre','$apellido','$email','$telefono')";
$resultado = mysqli_query($conexion,$sql);
if($resultado)
{
    HEADER ("LOCATION: mostrar.php");
}else{
    
        echo"alta incorrecta";
        }
?>