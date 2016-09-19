<?php

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment; filename=Reporte_Personal_usuarios.doc");


$conexion=mysql_connect("localhost","root","");
mysql_select_db("jeaf",$conexion);	



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LISTA DE USUARIOS</title>
</head>
<body>
<table width="100%" border="1" cellspacing="0" cellpadding="0">
 <tr>
   <td colspan="6" bgcolor="skyblue"><CENTER><strong>REPORTE DE LA TABLA USUARIOS</strong></CENTER></td>
 </tr>
 <tr bgcolor="red">
   <td><strong>usuario</strong></td>
   <td><strong>password</strong></td>
   <td><strong>rol</strong></td>
<td><strong>documento</strong></td>

 </tr>
 
<?PHP

$sql=mysql_query("select usuario, password, rol, documento from usuarios");
while($res=mysql_fetch_array($sql)){	

$usuario=$res["usuario"];
$password=$res["password"];
$rol=$res["rol"];
$documento=$res["documento"];



?>  
<tr>
<td><?php echo $usuario; ?></td>
<td><?php echo $password; ?></td>
<td><?php echo $rol; ?></td>
<td><?php echo $documento; ?></td>


                   
</tr> 
 <?php
}
 ?>
</table>
</body>
</html>