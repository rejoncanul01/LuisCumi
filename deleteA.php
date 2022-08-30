<?php

include("conexionA.php");
$con=conectar();

$idEstudiante=$_GET['id'];

$sql="DELETE FROM alumno  WHERE idEstudiante='$idEstudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnoA.php");
    }
?>
