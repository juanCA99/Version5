<?php  



/**
* 
*/
require_once'model/usuario.php';
class LoginControlador
{
	
	private $model;

	public function __construct() {
		$this->model= new Usuario();
	}

	public function Index()
	{
		require_once'views/header.html';
		require_once'views/login/index.php';
		require_once'views/footer.html';
	}
	public function sesion()
	{
		require_once'views/header.html';
		require_once'views/login/sesion.php';
		require_once'views/footer.html';
	}
	public function QuienesSomos()
	{
		require_once'views/header.html';
		require_once'views/login/quienes-somos.php';
		require_once'views/footer.html';
	}
	public function Contactenos()
	{
		require_once'views/header.html';
		require_once'views/login/contactenos.php';
		require_once'views/footer.html';
	}





	public function logeo() {
		$usuarios= $this->model;

		$usuarios->setUsuario($_REQUEST['usuario']);
		$usuarios->setPassword($_REQUEST['password']);

		$stmt= $this->model->logeo($usuarios);

		switch ($stmt['rol']) {
			case 'administrador':
			session_start();
				header("location:?controller=administrador&accion=index");
				$_SESSION['doc_administrador'] = $stmt['documento'];
				break;
			case 'aprendiz':
			session_start();
				header("location:?controller=aprendiz&accion=index");
				$_SESSION['doc_aprendiz'] = $stmt['documento'];
				break;
			
			default:
				header("location:index.php");
				break;
		}
	}
	
	public function salir() {
		session_start();
		session_destroy();
		header("location:index.php");
	}


public function Registrar()
	{
		require_once'views/header.html';
		require_once'views/login/nueva.php';
		require_once'views/footer.html';
	}

public function CRUD()
	{
		$nuevo=$this->model;

			$nuevo->setId($_REQUEST['id']);
			$nuevo->setUsuario($_REQUEST['usuario']);
			$nuevo->setPassword($_REQUEST['password']);
			$nuevo->setRol($_REQUEST['rol']);
			$nuevo->setDocumento($_REQUEST['documento']);
			$stmt= $nuevo->insertar($nuevo);
				header("location:?controller=login");
	}

}

?>