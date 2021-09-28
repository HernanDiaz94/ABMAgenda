<?php
include 'conexion.php';
$id=$_REQUEST['id'];


$sql="DELETE FROM personas where id_persona='$id' ";
$resultado = mysqli_query($conexion,$sql);
if($resultado)
{
    HEADER ("LOCATION: mostrar.php");
}else{
    
        echo"alta incorrecta";
    }
?>