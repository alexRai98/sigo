<?php
    require_once 'conexion.php';
    class consultasCursos {
        private $con;
        public function consultasCursos (){
            $this -> con=new Conexion();
        }

        public function Cursos($id){
            $objetos = array();
            $mysql= $this->con->abrirConexion();
            $consulta="SELECT idcourses,course,description FROM courses_has_teacher join courses on idcourses = co_idcourses
            where Teach_idTeachers = $id ";
            $result=mysqli_query($mysql,$consulta);
            
            if(!$result){
                die('Query Error'.mysqli_error($mysql));
            }
            
       
            while ($filas=mysqli_fetch_array($result)){
                
		      $objetos []=array(
                  'id' => $filas['idcourses'],
                  'curso' => $filas['course'],
                  'descrip' =>$filas['description'],
               );  
            }
            echo json_encode($objetos);

        }
    }

    if(isset($_POST['id'])){
        $c = new consultasCursos();
        $c-> Cursos($_POST['id']);

    }
 ?>

