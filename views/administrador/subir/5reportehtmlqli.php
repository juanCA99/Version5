
<?php
 
 $conexion = mysql_connect("localhost","root","");
mysql_select_db("jeaf",$conexion);
 $sql= mysql_query("select * from productos");

while($res=mysql_fetch_array($sql)){
	
echo'<tr>
		<td>'.$res['id'].'</td>
	<td>'.$res['id_electrodomestico'].'</td>
		<td>'.$res['nombre'].'</td>
		<td>'.$res['tipo'].'</td>
		<td>'.$res['marca'].'</td>
		<td>'.$res['precio'].'</td>
		
	</tr>
	';
	}
	
	
			
	$tbHtml="";
	
	if($query->num_rows>0){
		
	        echo "<table border='1px'>
             <header>
                <tr>
                  <th>id</th>
                  <th>id_electrodomestico</th>
                  <th>nombre</th>
					<th>tipo</th>
					<th>marca</th>
					<th>precio</th>
					
					
                  </tr>
            </header>";
		
		while($res=$query->fetch_array())
		{
         echo '<tr>
		<td>'.$res['id'].'</td>
		<td>'.$res['id_electrodomestico'].'</td>
		<td>'.$res['nombre'].'</td>
		<td>'.$res['tipo'].'</td>
		<td>'.$res['marca'].'</td>
		<td>'.$res['precio'].'</td>
		 	
	</tr>
	';
		}
		$tbHtml.= "</table>";
	}
	else
	{
	echo "No hay resultados";
	}
	//cambiar los datos por productos
	
?>
 
