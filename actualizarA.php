<?php 
    include("conexionA.php");
    $con=conectar();

$id=$_GET['id'];

$sql="SELECT * FROM alumno WHERE idEstudiante='$id'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
                <div class="container mt-5">
                    <form action="updateA.php" method="POST">
                    
                                <input type="hidden" name="idEstudiante" value="<?php echo $row['idEstudiante']  ?>">
                                
                                <input type="text" class="form-control mb-3" name="folio" placeholder="folio" value="<?php echo $row['folio']  ?>">
                                <input type="text" class="form-control mb-3" name="nombres" placeholder="nombres" value="<?php echo $row['nombres']  ?>">
                                <input type="text" class="form-control mb-3" name="apellidos" placeholder="apellidos" value="<?php echo $row['apellidos']  ?>">
                                
                            <input type="submit" class="btn btn-primary btn-block" value="Actualizar">
                    </form>
                    
                </div>
    </body>
</html>