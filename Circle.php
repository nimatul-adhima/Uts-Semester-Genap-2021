<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <title>Circle</title>
  </head>
  <body>
  <h1 class="text-center text-warning">NI'MATUL 'ADHIMA</h1>

<div class="container">
    <form action="" method="post">
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Circel Radius</label>
              <input type="text" name="Radius" class="form-control" id="exampleInputEmail1" >
            </div>
            <input type="submit" class="btn btn-outline-warning">
          </form>
    </div>
    <?php
$Radius;
$PI = 3.14159;

function setArea($Radius,$PI)
{
 $z= $PI*$Radius*$Radius;
 if ($z<=0)
 {
  $z = "hasil tidak boleh kurang dari 0";
 }
 return $z;
}
function setDiameter ($Radius)
{
 $z= 2*$Radius;
 if ($z<=0)
 {
  $z = "hasil tidak boleh kurang dari 0";
 }
 return $z;
}
function setCircumference($Radius,$PI)
{
 $z= 2*$PI*$Radius;
 if ($z<=0) 
 {
  $z = "hasil tidak boleh kurang dari 0";
 }
 return $z;
}
 echo "Area              = ".setArea($_POST['Radius'], $PI)."</br>"; 
 echo "Diameter          = ".setDiameter($_POST['Radius'])."</br>";
 echo "Circumference     = ".setCircumference($_POST['Radius'], $PI); 

?>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    -->
  </body>
</html>