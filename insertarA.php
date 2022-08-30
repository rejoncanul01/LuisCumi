<?php
include("conexionA.php");
$con=conectar();

$idEstudiante=$_POST['idEstudiante'];
$folio=$_POST['folio'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];


$sql="INSERT INTO alumno VALUES('$idEstudiante','$folio','$nombres','$apellidos')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: alumnoA.php");
    
}else {
}
?>