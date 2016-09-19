<?php 

/**
* 
*/
require_once'model/Crud2.php';
class Crud2Controlador
{
	private $model;

	public function __construct() {
		$this->model= new Crud2();
	}

	public function Index()
	{
		$productos = $this->model;
		$stmt= $productos->listar();

		require_once'views/header.html';
		require_once'views/administrador/Crud2/index.php';
		require_once'views/footer.html';
	}
	public function Otro()
	{
		require_once'views/header.html';
		require_once'views/administrador/Crud2/otro.php';
		require_once'views/footer.html';
	}
	public function Hola()
	{
		require_once'views/header.html';
		require_once'views/administrador/Crud2/nueva.php';
		require_once'views/footer.html';
	}
	public function ReporteWord()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Word.php';
		require_once'views/footer.html';
	}
	public function ReporteExcel()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Excel.php';
		require_once'views/footer.html';
	}
	public function ReporteTxt()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Txt.php';
		require_once'views/footer.html';
	}
	public function ReportePdf()
	{
		require_once'views/header.html';
		require_once'views/administrador/Reporte-Pdf.php';
		require_once'views/footer.html';
	}
	


public function Crud2()
	{
		$productos = $this->model;
		$stmt= $productos->listar();

		require_once'views/header.html';
		require_once'views/administrador/Crud2/registroproductos.php';
		require_once'views/footer.html';
	}
	public function CRUD()
	{
		$productos = $this->model;

		if (isset($_REQUEST['id'])) {
			$productos->setId($_REQUEST['id']);
			$stmt= $productos->consultaId($productos);
			if ($stmt) {
				require_once'views/header.html';
				require_once'views/administrador/Crud2/editar.php';
				require_once'views/footer.html';
				//editar
			}
			else
			{
		
				$productos->setId($_REQUEST['id']);
				$productos->setId_electrodomestico($_REQUEST['id_electrodomestico']);
				$productos->setNombre($_REQUEST['nombre']);
				$productos->setTipo($_REQUEST['tipo']);
				$productos->setMarca($_REQUEST['marca']);
				$productos->setPrecio($_REQUEST['precio']);
				$productos->setUbicacion($_REQUEST['ubicacion']);
				$stmt= $productos->insertar($productos);
				header("location:?controller=administrador");
			}
		}
		
	}
	public function Eliminar() {

		$productos= $this->model;

		$productos->setId($_REQUEST['id']);

		$stmt= $productos->Eliminar($productos);
		header("location:?controller=administrador");
	}

	public function editar(){
		$productos = $this->model;
		$productos->setId($_REQUEST['id']);
		$productos->setId_electrodomestico($_REQUEST['id_electrodomestico']);
		$productos->setNombre($_REQUEST['nombre']);
		$productos->setTipo($_REQUEST['tipo']);
		$productos->setMarca($_REQUEST['marca']);
		$productos->setPrecio($_REQUEST['precio']);
		$productos->setUbicacion($_REQUEST['ubicacion']);
		$stmt= $productos->editar();
		if ($stmt==true) {
			header("location:?controller=Crud2&accion=Crud2");
		}
	}}

 ?>