<?php 
session_start();
if ($_SESSION['doc_administrador']=="" || $_SESSION['doc_administrador']==null) {
	header("location:index.php");
}



 ?>

<body background="views/login/electrodomesticos.jpg">


<button class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span> <a href="?controller=login&accion=salir">CERRAR SESION</a></button>




<center>	

<div  class="navbar navbar-default" >

	<div  class="container">
	
		 <div class="navbar-header">

		
		
		<ol class="nav navbar-nav">
			
			
			<li><a href="?controller=administrador&accion=Crud1"><span class="glyphicon glyphicon-user"></span> Registro Usuarios </a></li>
			<li><a href="?controller=Crud2&accion=Crud2"><span class="glyphicon glyphicon-print"></span> Registro Productos </a></li>
			<li><a href="?controller=administrador&accion=Crud1"><span class="glyphicon glyphicon-qrcode"></span> Cotizaciones </a></li>
			<li><a href="?controller=administrador&accion=SubirArchivos"><span class="glyphicon glyphicon-level-up"></span> Subir archivos </a></li>
			<li><a href="?controller=administrador&accion=MostrarArchivos"><span class="glyphicon glyphicon-duplicate"></span> Listado Productos  </a></li>
			<li class="dropdown">
				<a href="" class="dropdown-toggle" data-toggle="dropdown">Reportes<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=administrador&accion=ReporteWord"><img src="views/login/word.png" width="25" height="25">Reporte Word</a></li>
					<li><a href="?controller=administrador&accion=ReporteExcel"><img src="views/login/excel.png" width="25" height="25">Reporte Excel</a></li>
					<li><a href="?controller=administrador&accion=ReportePdf"><img src="views/login/txt.jpg" width="25" height="25">Reporte Txt</a></li>
					<li><a href="?controller=administrador&accion=ReportePdf"><img src="views/login/pdf.png" width="25" height="25">Reporte Pdf</a></li>
					
					
				</ul>
			</li>
			
			</center>
	
		</ol>
	
	</div>

	
</div>


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
         <td>'.'<font color="white">'.$res['id'].'</td>
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