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











<center><h1><font color="white">COTIZACIONES</font></h1></center>
<br>
<br>

	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="panel panel-danger">
				<div class="panel-heading"> <center>REGISTRAR COTIZACIONES</center>
				</div>
				<div class="panel-body">
					<form method="post" action="?controller=Crud3&accion=CRUD">
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-ok"></span></span>
							<input type="hidden" name="id" class="form-control" placeholder="ingrese aqui el id">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="id_cotizacion_de_compra" class="form-control" placeholder="Ingrese aqui el id_cotizacion_de_compra">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="nombre_usuario" class="form-control" placeholder="ingrese el nombre usuario">
						</div>
						
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-sort"></span></span>
							<input type="text" name="telefono" class="form-control" placeholder="ingrese aqui el tipo telefono" required>
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
							<input type="text" name="direccion" class="form-control" placeholder="ingrese la direccion del usuario">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
							<input type="text" name="nombre_electrodomestico" class="form-control" placeholder="Ingrese aqui el nombre_electrodomestico">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
							<input type="text" name="precio_unitario" class="form-control" placeholder="Ingrese aqui el precio_unitario">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
							<input type="text" name="cantidad" class="form-control" placeholder="Ingrese aqui la cantidad">
						</div>
						<br>
						<div class="input-group">
							<span class="input-group-addon"><span class="glyphicon glyphicon-thumbs-up"></span></span>
							<input type="text" name="precio_total" class="form-control" placeholder="Ingrese aqui el precio_total">
						</div>
						<br>





						<button class="btn btn-danger btn-block">Registrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>