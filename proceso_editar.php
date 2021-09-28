<?php
include 'conexion.php';
$id=$_REQUEST['id'];

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];

$sql="UPDATE personas SET nombre='$nombre', apellido='$apellido', email='$email', telefono='$telefono' 
where id_persona ='$id' ";
$resultado = mysqli_query($conexion,$sql);
if($resultado)
{
    HEADER ("LOCATION: mostrar.php");
}else{
    
        echo"alta incorrecta";
    }
?>