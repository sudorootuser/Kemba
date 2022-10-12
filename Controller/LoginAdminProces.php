<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();
require_once '../Modelo/Conexion.php';

$usuario = $_POST['username'];
$password = $_POST['password'];

$sql_User = "SELECT * FROM usuarios WHERE username='$usuario' AND password='$password'";

if ($consulta_User = mysqli_query($link, $sql_User)) {
    session_regenerate_id();
    $member = mysqli_fetch_assoc($result);
    $_SESSION['SESS_MEMBER_ID'] = $member['idUsuarios'];
    $_SESSION['SESS_FIRST_NAME'] = $member['nombre'];

    echo "<script>window.location.href = '../AdminContent.php';</script>";
    //print_r($consulta_User);
} else {
    $_SESSION['SESS_MEMBER_ID'] = '';
    $_SESSION['SESS_FIRST_NAME'] = '';

    //Login faile
    echo "<script>window.location.href = '../LoginAdmin.php';</script>";
}
$id = mysqli_insert_id($link);
