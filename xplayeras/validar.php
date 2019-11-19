<?php
$usuario = $_POST['txtusuario'];
$pass = $_POST['txtcontraseña'];
 
if(empty($usuario) || empty($pass)){
    header("Location: logiin.php");
    exit();
}
include_once 'conexion.php';
$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
$sql_query="SELECT * from Usuarios WHERE Correo='$usuario'";

$resultado = $mysqli->query($sql_query);
while(($row = $resultado->fetch_assoc()) !== null)
{
if($row['Password'] == $pass){
        session_start();
        $_SESSION['usuario'] = $usuario;
        $_SESSION['tipo'] =$row['Tipo'];
        header("Location: index.php");
    }else{
        header("Location: logiin.php");
        exit();
    }
}
?>