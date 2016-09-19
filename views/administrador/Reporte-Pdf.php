<body background="views/login/electrodomesticos.jpg">
    <title>Usuarios</title>

<link rel="stylesheet" href="style.css" />

</head>

<body>
<div id="content">

<h1><font color="white">REPORTE DE USUARIOS </h1>

<hr />

<?php
	include_once("model/conexion1.php");

	$con = new DB;
	$pacientes = $con->conectar();
	$strConsulta = "SELECT Id, usuario, password, rol, documento from usuarios";
	$pacientes = mysql_query($strConsulta);
	$numfilas = mysql_num_rows($pacientes);
	
	echo '<table cellpadding="0" cellspacing="0" width="100%" style="font-size:20px" >';
	echo '<thead><tr><td>ID</td><td>USUARIO</td><td>PASSWORD</td><td>ROL</td><td>DOCUMENTO</td></tr></thead>';
	for ($i=0; $i<$numfilas; $i++)
	{
		$fila = mysql_fetch_array($pacientes);
		$numlista = $i + 1;
		echo '<td>'.$fila['Id'].'</td>';
		echo '<td>'.$fila['usuario'].'</td>';
		echo '<td>'.$fila['password'].'</td>';
		echo '<td>'.$fila['rol'].'</td>';
		echo '<td>'.$fila['documento'].'</td>';
	
		echo '<td><a href="views/administrador/reporte_historial.php?id='.$fila['Id'].'">ver</a></td></tr>';
	}
	echo "</table>";
?>			

</div>
</body>
</html>