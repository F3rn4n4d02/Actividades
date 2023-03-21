<?php
include "conexion.php"
if(isset($_POST['btn'])){
$nombre=$conex->Real_escape_string($_POST['Nombre']);
$Apellido=$conex->Real_escape_string($_POST['Apellidos']);
$Direccion=$conex->Real_escape_string($_POST['Direccion']);
$Telefono=$conex->Real_escape_string($_POST['telefono'];)
$Fecha=$conex->Real_escape_string($_POST['fecha']);
$Email=$conex->Real_escape_string($_POST['correo']);
if($Nombre ==""|| $Apellidos ==""|| $Direccion ==""|| $telefono ==""|| $Fecha ==""|| $Email ==""||)
}
else{
    $inserta = "INSERT INTO usuarios(Nombre, Apellidos, Direccion, Telefono, FechaN, Email) VALUES ('$nombre','$Apellidos' , '$Direcciones' , '$Telefono' ,'$FECHA' , '$Email')"{
    $registrar =$conex->query($inserta);}
        if($registrar>0){
            echo"registro exitoso";
        }else{
            echo"error al registrar";
    }
}   
?>