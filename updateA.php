<?php

include("conexionA.php");
$con=conectar();

$idEstudiante=$_POST['idEstudiante'];
$folio=$_POST['folio'];
$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];

$sql="UPDATE alumno SET  folio='$folio',nombres='$nombres',apellidos='$apellidos' WHERE idEstudiante='$idEstudiante'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumnoA.php");
    }
?>