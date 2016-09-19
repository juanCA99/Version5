<?php  



/**
* 
*/
class Usuario extends Conexion
{
	private $id,$usuario,$password,$rol,$documento;
	private $model;

	public function __construct()
	{
		$this->model= parent::__construct();
	}
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id= $id;
	}
	public function getUsuario() {
		return $this->usuario;
	}
	public function setUsuario($usuario) {
		$this->usuario= $usuario;
	}
	public function getPassword() {
		return $this->password;
	}
	public function setPassword($password) {
		$this->password= $password;
	}

	public function getRol() {
		return $this->rol;
	}
	public function setRol($rol) {
		$this->rol= $rol;
	}
	public function getDocumento(){
		return $this->documento;
	}

	public function setDocumento($documento){
		$this->documento=$documento;
	}
	
	public function insertar() {
		try{
			$query="INSERT INTO usuarios(id,usuario,password,rol,documento) VALUES(NULL,'".$this->usuario."','".$this->password."','".$this->rol."','".$this->documento."')";

		$stmt=$this->model->prepare($query);
		$stmt->execute();
		return true;
	} catch (PDOException $e) {
		return false;
	}
	}





	public function logeo() {
		$query="SELECT * FROM usuarios WHERE usuario='".$this->usuario."' AND password='".$this->password."'";

		$stmt= $this->model->prepare($query);
		$stmt->execute();

		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
}


	


?>