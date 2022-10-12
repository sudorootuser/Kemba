<?php
session_start();
require_once '../Modelo/Conexion.php';

$Oferta=$_POST['Oferta'];
$idprod=$_POST['idprod'];
$user=$_SESSION['SESS_MEMBER_ID'];
$fecha_oferta=date('Y-m-d');

$sql_Oferta = "INSERT INTO `oferta`(`valor_oferta`, `fecha_oferta`, `estado`, `producto_idproducto`, `usuarios_idusuarios`) VALUES ($Oferta,'$fecha_oferta',1,$idprod,$user)";
if ($consulta_Oferta = mysqli_query($link, $sql_Oferta)) {
    $id = mysqli_insert_id($link);   
        echo "<script>window.location.href = '../RespuestaRegistroOferta.php?id=$idprod';</script>";
  
} else {
    die("No existe la consulta");
}

