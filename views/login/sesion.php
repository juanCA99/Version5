
<body background="views/login/electrodomesticos.jpg">

<center>	
<div class="navbar navbar-default">

	<div  class="container">
	
		<h3> <div class="navbar-header">

		
		
		<ol class="nav navbar-nav">
			<li><a href="?controller=login&accion=Index"><span class="glyphicon glyphicon-home"></span> INICIO</a></li>
			
			<li><a href="?controller=login&accion=QuienesSomos"><span class="glyphicon glyphicon-fire"></span> ¿QUIENES SOMOS? </a></li>
			<li><a href="?controller=login&accion=contacto"><span class="glyphicon glyphicon-pencil"></span> CONTACTENOS </a></li>
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


<br>
<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<div class="panel panel-info">
			<div class="panel-heading">
				<center>ELECTRODOMESTICOS JEAF</center>
			</div>
			<div class="panel-body">
				<form method="post" action="?controller=login&accion=logeo">
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-user"></span> </span>
						<input type="text" name="usuario" class="form-control" placeholder="Ingrese aqui su usuario" required>
					</div>
					<br>
					<div class="input-group">
						<span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span> </span>
						<input type="password" name="password" class="form-control" placeholder="Ingrese aqui su constraseña" required>
					</div>
					<hr>
					<button class="btn btn-info btn-block">Iniciar Sesión</button>
				</form>
			</div>
		</div>
	</div>
</div>