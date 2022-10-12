<?php

session_start();
require_once '../Modelo/Conexion.php';

$titulo = $_POST['titulo'];
$test_cort = $_POST['test-cort'];
$contenido = $_POST['contenido'];
$Tipo = $_POST['Tipo'];
$imagen = $_POST['imagen'];


if($_POST == '' || $_POST == 'undefined' || $_POST == null){
    echo "<script>alert('Por favor llene todos los campos');</script>";
}


$sql_Oferta = "INSERT INTO contenido VALUES (null,'$contenido','$imagen','$Tipo','$titulo','$test_cort')";

if ($consulta_Oferta = mysqli_query($link, $sql_Oferta)) {
    echo "<script>window.location.href = '../AdminContent.php';</script>";
} else {
    die("No existe la consulta");
}
