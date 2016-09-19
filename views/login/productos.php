<body background="views/login/electrodomesticos.jpg">

<center>	
<div class="navbar navbar-default">

	<div  class="container">
	
		<h4> <div class="navbar-header">

		
		
		<ol class="nav navbar-nav">
			<li><a href="?controller=login&accion=Index"><span class="glyphicon glyphicon-home"></span> INICIO</a></li>
			<li><a href="?controller=login&accion=productos"><span class="glyphicon glyphicon-pencil"></span> PRODUCTOS </a></li>
			
			<li><a href="?controller=login&accion=QuienesSomos"><span class="glyphicon glyphicon-fire"></span> ¿QUIENES SOMOS? </a></li>
			<li><a href="?controller=login&accion=contactenos"><span class="glyphicon glyphicon-pencil"></span> CONTACTENOS </a></li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">INGRESAR<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=login&accion=sesion"><img src="views/login/login.jpg" width="25" height="25">INICIAR SESION</a></li>
					<li><a href="?controller=Login&accion=Registrar"><img src="views/login/sesion.jpg" width="25" height="25">REGISTRARSE</a></li>
					
				</ul>
			</li>
			</center>
	
		</ol>
	
	</div>
	</h3>
	
</div>
<br>
<br>
<center><img src="views/login/titulo.png"></center>
 




</body>

<center>

<?php
$host="localhost";
$usuario="root";
$password="";
$db="jeaf";


$conexion = new mysqli($host,$usuario,$password,$db);
$sql = "select * from productos";
$query=$conexion->query($sql);

 
//$conexion = mysql_connect("localhost","root","");
//mysql_select_db("proyecto2",$conexion);
 //$sql= mysql_query("select * from electrodomesticos");
//while($res=mysql_fetch_array($sql)){

			
	$tbHtml="";
	if($query->num_rows>0){
		
	        echo"<table border='1px'>
             <header>


                <tr>
                  <th bgcolor='white'>ID</th>
                  <th bgcolor='white'>ID ELECTRODOMESTICO</th>
                  <th bgcolor='white'>NOMBRE</th>
                  <th bgcolor='white'>TIPO</th>
				   <th bgcolor='white'>MARCA</th>
				   <th bgcolor='white'>PRECIO</th>
				   
             
                  </tr>
            </header>";
		

		
		while($res=$query->fetch_array())
		{
// Configuración imagen, traer ubicación de la tabla y luego colocar dentro
// del html para decirle donde esta la imagen
$z=$res['ubicacion'];
$x="<img src='$z' width='150' height='150'  border='0'>";



		
         echo '<tr>
         <td>'.'<font  color="white">'.$res['id'].'</td>
		<td>'.'<font color="white">'.$res['id_electrodomestico'].'</td>
		<td>'.'<font color="white">'.$res['nombre'].$x.'</td>
		<td>'.'<font color="white">'.$res['tipo'].'</td>
		<td>'.'<font color="white">'.$res['marca'].'</td>
		<td>'.'<font color="white">'.$res['precio'].'</td>
		
		<br>
		
	</tr>';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
<html>
<head>
<body>
<center><h1><font color="white">PRODUCTOS</font></h1></center>
</html>
</head>
</body>

</center>