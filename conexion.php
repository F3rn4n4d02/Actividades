<?php
$servidor ="localhost";
$usuario ="root";
$password = "";
$bd ="actividad";
$hola = mysqli_connect($servidor,$usuario,$password,$bd);
if($hola->connect_error){
    die("error al conectar la bd".$hola->connect_error);
}
?>