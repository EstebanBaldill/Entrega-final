<?php
$nombre = $_POST['txtnombre'];
$usuario = $_POST['txtcorreo'];
$pass = $_POST['txtcontraseña'];
 
if(empty($nombre)|| empty($usuario) || empty($pass)){
    header("Location:./registro.php");
    exit();
}
include_once './conexion.php';
$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
$sql_query= "INSERT INTO Usuarios(NombreCompleto,Tipo,Correo,Password) VALUES('$nombre','2','$usuario','$pass')";
if($resultado=$mysqli->query($sql_query))
{
    header("Location:./logiin.php"); 
}

?>