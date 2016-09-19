<?php  

session_start();
if ($_SESSION['doc_aprendiz']=="" || $_SESSION['doc_aprendiz']==null ) {
	header("location:index.php");
}

?>


<body background="views/login/electrodomesticos.jpg">


<a href="?controller=login&accion=salir">Cerrar Sesion</a>
<center> <img src="views/aprendiz/bienveniidos.gif" width="250" height="130"> </center>


<center>	
<div class="navbar navbar-default">

	<div  class="container">
	
		 <div class="navbar-header">

		
		
		<ol class="nav navbar-nav">
			
				<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Samsung<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=Aprendiz&accion=Tvsamsung"><img src="views/aprendiz/tv.jpg" width="25" height="25">Televisores</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasSamsung"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=AspiradorasSamsung"><img src="views/aprendiz/aspiradora.jpg" width="25" height="25">Aspiradoras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosSamsung"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>
					<li><a href="?controller=Aprendiz&accion=VentiladoresSamsung"><img src="views/aprendiz/ventilador.jpg" width="25" height="25">Ventiladores</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Panasonic<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=login&accion=NeverasPanasonic"><img src="views/aprendiz/nevera.jpg" width="25" height="25">Neveras</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasPanasonic"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=SecadorasPanasonic"><img src="views/aprendiz/secadora.jpg" width="25" height="25">Secadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosPanasonic"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>
					<li><a href="?controller=Aprendiz&accion=ExprimidoresPanasonic"><img src="views/aprendiz/exprimidor.jpg" width="25" height="25">Exprimidores</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Philips<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=login&accion=NeverasPhilips"><img src="views/aprendiz/nevera.jpg" width="25" height="25">Neveras</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasPhilips"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=SecadorasPhilips"><img src="views/aprendiz/secadora.jpg" width="25" height="25">Secadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=EstufasPhilips"><img src="views/aprendiz/estufa.jpg" width="25" height="25">Estufas</a></li>
					<li><a href="?controller=Aprendiz&accion=DvdsPhilips"><img src="views/aprendiz/dvd.jpg" width="25" height="25">Dvds</a></li>
					<li><a href=""><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">LG<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=aprendiz&accion=TelevisoresLg"><img src="views/aprendiz/tv.jpg" width="25" height="25">Televisores</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasLg"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=SecadorasLg"><img src="views/aprendiz/secadora.jpg" width="25" height="25">Secadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosLg"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>
					<li><a href="?controller=Aprendiz&accion=AspiradorasLg"><img src="views/aprendiz/aspiradora.jpg" width="25" height="25">Aspiradoras</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Mabe<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=login&accion=EstufasMabe"><img src="views/aprendiz/estufa.jpg" width="25" height="25">Estufas</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasMabe"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=NeverasMabe"><img src="views/aprendiz/nevera.jpg" width="25" height="25">Neveras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosMabe"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>
					<li><a href="?controller=Aprendiz&accion=CalentadorMabe"><img src="views/aprendiz/calentador.png" width="25" height="25">Calentador de agua</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Sony<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=aprendiz&accion=TvSony"><img src="views/aprendiz/tv.jpg" width="25" height="25">Televisores </a></li>
					<li><a href="?controller=Aprendiz&accion=CamarasSony"><img src="views/aprendiz/camara.png" width="25" height="25">Camaras</a></li>
					<li><a href="?controller=Aprendiz&accion=DvdsSony"><img src="views/aprendiz/dvd.jpg" width="25" height="25">Dvds</a></li>
					<li><a href="?controller=Aprendiz&accion=EquiposSony"><img src="views/aprendiz/calentador.png" width="25" height="25">Equipos de sonido</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosSony"><img src="views/aprendiz/equipo.jpg" width="25" height="25">Hornos microondas</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Whirpool<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=login&accion=NeverasWhirpool"><img src="views/aprendiz/nevera.jpg" width="25" height="25">Neveras</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasWhirpool"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=SecadorasWhirpool"><img src="views/aprendiz/secadora.jpg" width="25" height="25">Secadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosWhirpool"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>
					<li><a href="?controller=Aprendiz&accion=EstufasWhirpool"><img src="views/aprendiz/estufa.jpg" width="25" height="25">Estufas</a></li>

				</ul>
			</li>

		<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Daewoo<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=aprendiz&accion=TvDaewoo"><img src="views/aprendiz/tv.jpg" width="25" height="25">Televisores</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasDaewoo"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=SecadorasDaewoo"><img src="views/aprendiz/secadora.jpg" width="25" height="25">Secadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosDaewoo"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>
					
				</ul>
			</li>

<li><a href="" class="dropdown-toggle" data-toggle="dropdown">Haceb<span class="caret"></span></a>
				
				<ul class="dropdown-menu">
					<li><a href="?controller=login&accion=NeverasHaceb"><img src="views/aprendiz/nevera.jpg" width="25" height="25">Neveras</a></li>
					<li><a href="?controller=Aprendiz&accion=LavadorasHaceb"><img src="views/aprendiz/lavadora.jpg" width="25" height="25">Lavadoras</a></li>
					<li><a href="EstufasHaceb"><img src="views/aprendiz/estufa.jpg" width="25" height="25">Estufas</a></li>
					<li><a href="?controller=Aprendiz&accion=SecadorasHaceb"><img src="views/aprendiz/secadora.jpg" width="25" height="25">Secadoras</a></li>
					<li><a href="?controller=Aprendiz&accion=HornosHaceb"><img src="views/aprendiz/horno.jpg" width="25" height="25">Hornos microondas</a></li>

				</ul>
			</li>
			</center>
	
		</ol>
	
	</div>

	
</div>
<br>
<br>



<Center>

   <table border="2">
    <tr>
        <th scope="colgroup" colspan="4"><h3><font color="Orange"><center>ASPIRADORAS SAMSUNG</center></font></h3></th>
    </tr>
    <tr>
        <td scope="rowgroup"> <img  src="views/aprendiz/34.jpg" width="100" height="100"></td>
        <td scope="col"><h4><font color="white"><p>Aspiradora, </p><p>con deposito</p><p>eco brush</p></font></h4></td>
        <td scope="col"><h4><font color="white">$850.000</font></h4></td>  
    </tr>
    <tr>
         
    </tr>
    <tr>
    	<td scope="rowgroup"><img src="views/aprendiz/35.jpg" width="100" height="100"></td>
    	<td scope="col"><h4><font color="white"><p>Aspiradora</p><p>con deposito </p><p>Twim changer system</p></font></hz></td>
        <td scope="col"><h4><font color="white">$1.383.000</font></hz></td>   
    </tr>

    <tr>
    	<td scope="rowgroup"><img src="views/aprendiz/36.jpg" width="100" height="100"></td>
    	<td scope="col"><h4><font color="white"><p>Aspiradora </p><p>Con deposito </p><p>Succion poderosa</p></font></hz></td>
        <td scope="col"><h4><font color="white">$1.000.000</font></hz></td>   
    </tr>

    <tr>
    	<td scope="rowgroup"><img src="views/aprendiz/37.jpg" width="100" height="100"></td>
    	<td scope="col"><h4><font color="white"><p>Aspiradora </p><p>con deposito</p><p>succion poderosa wash</p></font></hz></td>
        <td scope="col"><h4><font color="white">$1.100.000</font></hz></td>   
    </tr>
    
        
        


 </table>
 </center>