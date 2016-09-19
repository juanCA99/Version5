<?php 

/**
* 
*/
require_once'model/Administrador.php';
class AdministradorControlador
{
	private $model;

	public function __construct() {
		$this->model= new Administrador();
	}

	public function Index()
	{
		$usuario = $this->model;
		$stmt= $usuario->listar();

		require_once'views/header.html';
		require_once'views/administrador/index.php';
		require_once'views/footer.html';
	}
	public function Otro()
	{
		require_once'views/header.html';
		require_once'views/administrador/otro.php';
		require_once'views/footer.html';
	}
	public function Hola()
	{
		require_once'views/header.html';
		require_once'views/administrador/nueva.php';
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
	public function SubirArchivos()
	{
		require_once'views/header.html';
		require_once'views/administrador/subir/archivo.html';
		require_once'views/footer.html';
	}
	public function MostrarArchivos()
	{
		require_once'views/header.html';
		require_once'views/administrador/subir/6reportehtmlqli1.php';
		require_once'views/footer.html';
	}
	



	public function Crud1()
	{
		$usuario = $this->model;
		$stmt= $usuario->listar();

		require_once'views/header.html';
		require_once'views/administrador/registrousuarios.php';
		require_once'views/footer.html';
	}
	public function CRUD()
	{
		$usuario = $this->model;

		if (isset($_REQUEST['id'])) {
			$usuario->setId($_REQUEST['id']);
			$stmt= $usuario->consultaId($usuario);
			if ($stmt) {
				require_once'views/header.html';
				require_once'views/administrador/editar.php';
				require_once'views/footer.html';
				//editar
			}
			else
			{
		
				$usuario->setId($_REQUEST['id']);
				$usuario->setUsuario($_REQUEST['usuario']);
				$usuario->setPassword($_REQUEST['password']);
				$usuario->setRol($_REQUEST['rol']);
				$usuario->setDocumento($_REQUEST['documento']);
				$stmt= $usuario->insertar($usuario);
				header("location:?controller=administrador");
			}
		}
		
	}
	public function Eliminar() {

		$usuario= $this->model;

		$usuario->setId($_REQUEST['id']);

		$stmt= $usuario->Eliminar($usuario);
		header("location:?controller=administrador");
	}

	public function editar(){
		$usuario = $this->model;
		$usuario->setId($_REQUEST['id']);
		$usuario->setUsuario($_REQUEST['usuario']);
		$usuario->setPassword($_REQUEST['password']);
		$usuario->setRol($_REQUEST['rol']);
		$usuario->setDocumento($_REQUEST['documento']);
		$stmt= $usuario->editar();
		if ($stmt==true) {
			header("location:?controller=administrador&accion=Crud1");
		}
	}}

 ?>