<?php
session_start();
require('mymodel.php');
$obj_db = new Database();
if(isset($_SESSION['IndiceForm'])){ 
    $id_encuesta = $_SESSION['IndiceForm'];
    $sql = "DELETE FROM `formularios` WHERE id_Formulario = ".$id_encuesta;
}else{
    header('location: forms.php'); // por ultimo si todo salio bien, redireccionamos al index para que el usuario vea su encuesta recien creada.
}
mysqli_query($obj_db->conex, $sql); // y ejecutamos el query
session_destroy();
header('location:forms.php');

