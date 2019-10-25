<?php
    require_once 'conexion.php';
    class consultasLogin {
        private $con;
        public function consultasLogin (){
            $this -> con=new Conexion();
        }

        public function DatosAlumno(){
            $objetos = array();
            $mysql= $this->con->abrirConexion();
            
            $consulta="SELECT * FROM Studens ";
            $result=$mysql->query($consulta);
            if(!$result) {
                die('Query Error' . mysqli_error($mysql));
              }
            while ($filas=$result->fetch_array(MYSQLI_ASSOC)){
		      $objetos[]=new Usuario($filas["idStudens"], $filas["name"], $filas["surname"], $filas["user"], $filas["password"] );
            }
            $this->con->cerrarConexion();
	        return $objetos;
        }
        
        public function DatosProfesor(){
            $objetos = array();
            $mysql= $this->con->abrirConexion();
            
            $consulta="SELECT * FROM Teachers ";
            $result=$mysql->query($consulta);

            while ($filas=$result->fetch_array(MYSQLI_ASSOC)){
		      $objetos[]=new Usuario($filas["idTeachers"], $filas["name"], $filas["surname"], $filas["user"], $filas["password"] );
            }
            $this->con->cerrarConexion();
	    return $objetos;
        }
        
    }
 ?>

