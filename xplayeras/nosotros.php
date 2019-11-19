
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
    <title>catalogo</title>
</head>
<body>
    <header>
        <div class="icono">
            <img src="./img/logo.png" >
        </div>
        <div class="Nombre" >
            <h1>NOSOTROS</h1>
        </div>
    </header>
    <div id="encabezado">
        <div id="menu">
            <ul>
                <li><a href="./index.php"  title="pagina principal" >°Inicio°</a></li>
                <li><a href="./catalogo.php"  title="catalogo"> °catalogo° </a></li>
                <li class="right">			
                           	
			       	<a class="linkLogin" href = "logiin.php" ><?php echo $usuario?></a>
                                
					</li>	
					<li class="right"><p class="datosLogin"></li>
            </ul>
        </div>
    </div>
    <div class="areaprincipal">

    
			<h1> Xplayeras.com , el lugar donde puedes comprar y diseñar tu propia playera</h1>
                        <p> somos una empresa que se preocupa por como vistes , compra y luce las mejores playeras 
                    en tendencia, para relucir como solo tu sabes</p>
                    <br>
                    <h1>MISION</h1>
                    <P>Ser la empresa mas grande en venta y distribucion  de playeras
                        numero 1 en todo el mundo, con diseños unicos y personalizados 
                        para todo publico.
                    </P>
                    <br>
                     <h1>VISION</h1>
                     <p>Convertirnos en una pagina reconocida mundialmente en distribucion y venta
                         de playeras , dando a reconocer el buen material que usamos en nuestras players </p>
                
                    <div class="nosotros"><img src="./img/logo.png" alt=""></div>
				
			
   <div class="areaprincipal">


    <footer>
            <div class="piepagina" >
                <h3>Universidad Autónoma de Chiapas</h3>
                <p>xplayeras.com</p>
                <p>&copy; Derechos reservados</p>
            </div>
    </footer>
</body>
</html>