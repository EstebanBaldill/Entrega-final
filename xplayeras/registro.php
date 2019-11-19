<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type=text/css  href="css/style login.css">
<title>Login</title></head>
<body>
<div>
<center>
   <form method="post" action="nuevousuario.php">
   <table>
   <Label>registro</Label>
   <img src="../xplayeras/img/regi.png" width="20%">
   <tr><td align="center" rowspan="5"> </td> <td><label >nombre</label></td><td><label >Correo</label></td>
   </tr>
   <tr><td><input type="text" name="txtnombre"></td><td><input type="text" name="txtcorreo"></td></tr>
   <tr><td><label>Contraseña</label></td><td><label>repetir Contraseña</label></td></tr>
   <tr><td><input type="password" name="txtcontraseña"></td><td><input type="password" name="txtcontraseña2"></td></tr>
   <tr><td><input type="submit" value="Registrarme"></td><td>
   </tr>
   </table>
   
   </form>
   </center>
</div>
</body>
</html>