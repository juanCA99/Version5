<?php  

 



/**
* 
*/
class Administrador extends Conexion
{
	private $documento,$nombre,$apellido,$rol,$correo;
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
	public function setusuario($usuario) {
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
	public function Eliminar()
    {
        try 
        {
        	/*$query="DELETE FROM usuarios WHERE documento='".$this->documento."'";*/
            $query="DELETE FROM usuarios WHERE id='".$this->id."'"; 


        $stmt=$this->model->prepare($query);
		$stmt->execute();
            return true;
        } catch (Exception $e) 
        {
            return false;

        }
    }
   /* public function actualizar() {


    	 $stmt = $con->prepare( 'UPDATE prueba SET usuarios = :usuarios WHERE usuario = :usuario' );
    	 $rows = $stmt->execute( array( ':nombre'   => $nom,':apellidos' => $ape));

  	try {
    	echo 'Actualización correcta';
  	
	} catch(PDOException $e) {
	  echo 'Error: ' . $e->getMessage();
	}
    }*/
    public function consultaId() {
    	try {
    		$query= "SELECT * FROM usuarios  WHERE  id='".$this->id."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function listar() {

    	try {
    		$query= "SELECT * FROM usuarios";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_OBJ);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function editar() {
    	try {
    		$query="UPDATE usuarios SET usuario='".$this->usuario."',password='".$this->password."',rol='".$this->rol."',documento='".$this->documento."' WHERE id='".$this->id."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}

?>