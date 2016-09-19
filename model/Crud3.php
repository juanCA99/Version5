<?php  

 



/**
* 
*/
class Crud3 extends Conexion
{
	private $id,$id_cotizacion_de_compra,$nombre_usuario,$telefono,$direccion,$nombre_electrodomestico,$precio_unitario,$cantidad,$precio_total;
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
	public function getId_Cotizacion_de_compra() {
		return $this->id_cotizacion_de_compra;
	}
	public function setId_cotizacion_de_compra($id_cotizacion_de_compra) {
		$this->id_cotizacion_de_compra= $id_cotizacion_de_compra;
	}
	public function getNombre_usuario() {
		return $this->nombre_usuario;
	}
	public function setNombre_usuario($nombre_usuario) {
		$this->nombre_usuario= $nombre_usuario;
	}
	public function getTeletono() {
		return $this->telefono;
	}
	public function setTelefono($telefono) {
		$this->telefono= $telefono;
	}
	public function getDireccion() {
		return $this->direccion;
	}
	public function setDireccion($direccion) {
		$this->direccion= $direccion;
	}

	public function getNombre_electrodomestico(){
		return $this->nombre_electrodomestico;
	}

	public function setNombre_electrodomestico($nombre_electrodomestico){
		$this->nombre_electrodomestico=$nombre_electrodomestico;
	}
	public function getPrecio_unitario() {
		return $this->precio_unitario;
	}
	public function setPrecio_unitario($precio_unitario) {
		$this->precio_unitario= $precio_unitario;
	}
	public function getCantidad() {
		return $this->cantidad;
	}
	public function setCantidad($cantidad) {
		$this->cantidad= $cantidad;
	}
	public function getPrecio_total() {
		return $this->precio_total;
	}
	public function setPrecio_total($precio_total) {
		$this->precio_total= $precio_total;
	}





	
	public function insertar() {
		try{
			$query="INSERT INTO cotizaciones(id,id_cotizacion_de_compra,nombre_usuario,telefono,direccion,nombre_electrodomestico,precio_unitario,cantidad,precio_total) VALUES(NULL,'".$this->id_cotizacion_de_compra."','".$this->nombre_usuario."','".$this->telefono."','".$this->direccion."','".$this->nombre_electrodomestico."','".$this->precio_unitario."','".$this->cantidad."','".$this->precio_total."')";

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
            $query="DELETE FROM cotizaciones WHERE id='".$this->id."'"; 


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
    		$query= "SELECT * FROM cotizaciones  WHERE  id='".$this->id."'";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetch(PDO::FETCH_ASSOC);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function listar() {

    	try {
    		$query= "SELECT * FROM cotizaciones";

    	$stmt= $this->model->prepare($query);
    	$stmt->execute();
    	return $stmt->fetchAll(PDO::FETCH_OBJ);
    	} catch (PDOException $e) {
    		return false;
    	}
    }
    public function editar() {
    	try {
    		$query="UPDATE cotizaciones SET id_cotizacion_de_compra='".$this->id_cotizacion_de_compra."',nombre_usuario='".$this->nombre_usuario."',telefono='".$this->telefono."',direccion='".$this->direccion."',nombre_electrodomestico='".$this->nombre_electrodomestico."',precio_unitario='".$this->precio_unitario."',cantidad='".$this->cantidad."',precio_total='".$this->precio_total."' WHERE id='".$this->id."'";
    		$stmt= $this->model->prepare($query);
    		$stmt->execute();
    		return true;
    	} catch (PDOException $e) {
    		return false;
    	}
    }
}

?>