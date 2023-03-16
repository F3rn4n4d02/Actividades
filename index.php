<?php
error_reporting(0);
if(isset($_POST['btn'])){

   $numero0=POST['caja 1'];
   $numero0=POST['caja 2'];
   $numero1=(int)$numero1;
   $numero2=(int)$numero2;
   $resultado=$numero1+ $numero2;
   $valor=$resultado;
   echo $valor;
}
else{
    echo "no existe datos";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <title>practica1 con php</title>

</head>
<body>
    
   <!-- navar -->
    <?php include "include/navbar.php" ?>
    <?php include "include/menu.php" ?>
    <?php include "include/operaciones.php" ?> 

    <script scr="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>