<?php 
session_start();
if ($_SESSION['doc_administrador']=="" || $_SESSION['doc_administrador']==null) {
	header("location:index.php");
}



 ?>

<body background="views/login/electrodomesticos.jpg">


<button class="btn btn-info"><span class="glyphicon glyphicon-log-out"></span> <a href="?controller=login&accion=salir">CERRAR SESION</a></button>
<center> 

</center>


<center>	

<div  class="navbar navbar-default" >

	<div  class="container">
	
		 <div class="navbar-header">

		
		
		<ol class="nav navbar-nav">
			
			
			<li><a href="?controller=administrador&accion=Crud1"><span class="glyphicon glyphicon-user"></span> Registro Usuarios </a></li>
			<li><a href="?controller=Crud2&accion=Crud2"><span class="glyphicon glyphicon-print"></span> Registro Productos </a></li>
			<li><a href="?controller=Crud3&accion=Crud3"><span class="glyphicon glyphicon-qrcode"></span> Cotizaciones </a></li>
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


<br>
<br>

<center><h1>
</h1>	
</center>



<center><h1><font color="white">REGISTRO DE USUARIOS</font></h1></center>

<br>
<br>

<div class="col-md-8 col-md-offset-2">
<div class="table-responsive">
<table class="table table-bordered table-hover">
	<tr class="active">
		<td><center><font color="black">Id</font></center> </td>
		<td><center><font color="black">Usuario</font></center> </td>
		<td><center><font color="black">password</font></center> </td>
		<td><center><font color="black">Rol</font></center> </td>
		<td><center><font color="black">Documento</font></center> </td>
	</tr>
	<tr class="active">
		<?php foreach ($stmt as $key) {
			echo 

			'	<tr>
				<td>'.'<font color="white">'.$key->id.'</td>
				<td>'.'<font color="white">'.$key->usuario.'</td>
				<td>'.'<font color="white">'.$key->password.'</td>
				<td>'.'<font color="white">'.$key->rol.'</td>
				<td>'.'<font color="white">'.$key->documento.'</td>
				<td>
				<form method="post" action="?controller=administrador&accion=Eliminar">
				<input type="hidden" name="id" value='.$key->id.'>
				<button class="btn btn-info">Eliminar</button>
				</td>
				<td>
				</form><form method="post" action="?controller=administrador&accion=CRUD">
				<input type="hidden" name="id" value='.$key->id.'>
				<button class="btn btn-info">Editar</button>
				</form></td>

				</tr>';
		}
		 ?>
	</tr>
</table>
<br>
<form method="post" action="?controller=administrador&accion=Hola">
				<input type="hidden" name="id" value='.$key->id.'>
				 <button class="btn btn-info"> <span class="glyphicon glyphicon-send"></span> INSERTAR</button>
				</form>
<form method="post" action="?controller=administrador&accion=Otro">
				<input type="hidden" name="id" value='.$key->id.'>
				 <button class="btn btn-info"> <span class="glyphicon glyphicon-send"></span> ELIMINAR</button>
				</form>
</form>
</div>
</div>
?>php