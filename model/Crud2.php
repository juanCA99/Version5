<?php  

 



/**
* 
*/
class Crud2 extends Conexion
{
	private $id,$id_electrodomestico,$nombre,$tipo,$marca,$precio,$ubicacion;
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
	public function getId_electrodomestico() {
		return $this->id_electrodomestico;
	}
	public function setId_electrodomestico($id_electrodomestico) {
		$this->id_electrodomestico= $id_electrodomestico;
	}
	public function getNombre() {
		return $this->nombre;
	}
	public function setNombre($nombre) {
		$this->nombre= $nombre;
	}
	public function getTipo() {
		return $this->tipo;
	}
	public function setTipo($tipo) {
		$this->tipo= $tipo;
	}
	public function getMarca(){
		return $this->marca;
	}

	public function setMarca($marca){
		$this->marca=$marca;
	}
	public function getPrecio() {
		return $this->precio;
	}
	public function setPrecio($precio) {
		$this->precio= $precio;
	}
	public function getUbicacion() {
		return $this->ubicacion;
	}
	public function setUbicacion($ubicacion) {
		$this->ubicacion= $ubicacion;
	}





	
	public function insertar() {
		try{
			$query="INSERT INTO productos(id,id_electrodomestico,nombre,tipo,marca,precio,ubicacion) VALUES(NULL,'".$this->id_electrodomestico."','".$this->nombre."','".$this->tipo."','".$this->marca."','".$this->precio."','".$this->ubicacion."')";

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
            $query="DELETE FROM productos WHERE id='".$this->id."'"; 


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
    		$query= "SELECT * FROM productos  WHERE  id='".$this->id."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function listar() {

    	try {
    		$query= "SELECT * FROM productos";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_OBJ);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function editar() {
    	try {
    		$query="UPDATE productos SET id_electrodomestico='".$this->id_electrodomestico."',nombre='".$this->nombre."',tipo='".$this->tipo."',marca='".$this->marca."',precio='".$this->precio."',ubicacion='".$this->ubicacion."' WHERE id='".$this->id."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}

?>