<?php
session_start();
if ($_SESSION["usuario"] == "") {
    header("Location: ./Logiin.php");
    exit();
}
else{
$login_session=$_SESSION['usuario'];
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
            <h1>catalogo</h1>
        </div>
    </header>
    <div id="encabezado">
        <div id="menu">
            <ul>
                <li><a href="./index.php"  title="pagina principal" >°Inicio°</a></li>
                <li><a href="./contactanos.php"  title="catalogo"> °Contactanos° </a></li>
                <li><a href="#" title="fotos"> <img src="./img/carri.png" width="3%" ></a></li>
                <li class="right">			
                           	
			       	<a class="linkLogin" href = "logiin.php" >Cerrar sesión</a>
                                
					</li>	
					<li class="right"><p class="datosLogin"></li>
            </ul>
        </div>
    </div>
    <section class="catalago">
    
			<div class="areaprincipal">
					<table align="center">	
					           <caption>Nuestras plyeras</caption>	
					            <tr>				
									<th>numero</th>
									<th>Nombre</th>
									<th>DESCRIPCION</th>
									<th>PRECIO</th>
                                    <th>Existencia</th>
									<th>Diseño</th>
									<th>Imagen</th>
								</tr>
								<?php
								include_once './conexion.php';
								$mysqli = new mysqli($hostdb,$usuariodb,$clavedb,$basededatos);
								if ($mysqli -> connect_errno) {
								die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());			
								}
								else
								{
								$sql_query="SELECT * FROM playeras";
								$resultado=$mysqli->query($sql_query);
								while($row = $resultado->fetch_assoc()) 
								{
									
									?>
									       
											<tr>
											<td><?php echo $row["id_playera"]; ?></td>
											<td><?php echo $row["Nombre"]; ?></td>
											<td><?php echo utf8_encode( $row["Descripcion"]); ?></td>
											<td><?php echo $row["Precio"]; ?></td>
                                            <td><?php echo $row["Existencia"]; ?></td>
											<td><?php echo $row["diseño"]; ?></td>
											<td><img src="./img/<?php echo $row["id_playera"]?>.JPG"></td>
					      
											<?php			
									}
								}
								?>
					</table>
				</div>
				
			
    </section>
	<footer>
            <div class="piepagina" >
                <h3>Universidad Autónoma de Chiapas</h3>
                <p>FREDDY ESTEBAN BALCAZAR PADILLA</p>
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