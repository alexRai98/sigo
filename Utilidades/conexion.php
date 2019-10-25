<?php
	
    class Conexion{
	private $con;
	public function abrirConexion(){
		
		$this->con= mysqli_connect("localhost","root","123456","lab"); 
		if (!$this->con){
			echo "Error: No se pudo conectar a MySQL.<br>";
			echo "Error de depuracion".mysqli_connect_error()."<br>";
			echo "Error de depuracion".mysqli_connect_error()."<br>";
			exit;
		}
		return $this->con;
	}
	public function cerrarConexion(){
		mysqli_close($this->con);
			}

	}
	

?>