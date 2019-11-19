<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="css/style login.css">
   <title>Document</title>
</head>
<body>
   <center>
   <form method="post" action="validar.php">
   <table>
   <Label>Login</Label>
   <img src="../xplayeras/img/login.png" width="20%">
   <tr><td align="center" rowspan="5"> </td> <td><label >usuario</label></td>
   </tr>
   <tr><td><input type="text" name="txtusuario"></td></tr>
   <tr><td><label>Contraseña</label></td></tr>
   <tr><td><input type="password" name="txtcontraseña"></td></tr>
   <tr><td><input type="submit" value="Iniciar secion"></td><td><a href="registro.php">Registrarte</a></td></tr>
   <a href="./index.php">Volver</a>
   </table>
   
   </form>
   </center>
</body>
</html>