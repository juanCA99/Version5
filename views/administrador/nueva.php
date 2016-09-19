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

<br>

<center><h1>
</h1>	
</center>

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









			

<center><h1><font color="white">USUARIOS</font></h1></center>
<br>
<br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-danger">
				<div class="panel-heading"> <center>REGISTRAR USUARIO</center>
				</div>
				<div class="panel-body">
					<form method="post" action="?controller=Administrador&accion=CRUD">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
							<input type="text" name="id" class="form-control" placeholder="ingrese aqui el id usuario">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="usuario" class="form-control" placeholder="Ingrese aqui su usuario">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="password" name="password" class="form-control" placeholder="***********">
						</div>
						
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-sort"></span></span>
							<input type="text" name="rol" class="form-control" placeholder="ingrese aqui su rol" required>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
							<input type="text" name="documento" class="form-control" placeholder="Ingrese aqui su documento">
						</div>
						<hr>
						<button class="btn btn-danger btn-block">Registrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>