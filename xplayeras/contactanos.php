<?php
session_start();
if (isset($_SESSION['usuario'])){ 
        $login_session=$_SESSION['usuario'];
        $usuario="cerrar secion";
	} 
	else{
        $login_session="";
        $usuario="iniciar secion";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Xplayeras.com</title>
</head>
<body>
    
    <header >
       
        <div class="icono">
            <img src="./img/logo.png" >
        </div>
        <div class="Nombre" >
            <h1>Lo Imaginas,Lo Hacemos xplayeras.com</h1>
        </div>
    </header>
   

    <div id="encabezado">
        <div id="menu">
            <ul>
                <li><a href="./index.php" title="pagina principal" >°Inicio°</a></li>
                <li><a href="./catalogo.php" title="catalogo"> °Playeras° </a></li>
                <li><a href="./nosotros.php" title="nosotros"> °Nosotros° </a></li>
                <li class="right">						
			       	<a class="linkLogin" href = "logiin.php" ><?php echo $usuario?></a>
					</li>	
					<li class="right"><p class="datosLogin"></li>
            </ul>
           

        </div>
        
    </div>
    <footer>
            <div class="piepagina" >
                <img src="./img/logo.png" alt="">
                <h3>xplayeras.com</h3>
                <p>Dudas o quejas al  +52 961 3482854</p>
                <p>&copy; Derechos reservados</p>
                <p>Redes sociales</p>
              
            </div>
        
            <table>
                <td><a href=""><img src="./img/facebook.png" width="30%"></a></td>
                <td><a href=""><img src="./img/gmail.png" width="30%"></a></td>
                <td><a href=""><img src="./img/twitter.png" width="10%"></a></td>
                <td><a href=""><img src="./img/ins.png" width="30%"></a></td>
            </table>
            
    </footer>
  
    
</body>
</html>