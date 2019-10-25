<?php
    require_once 'conexion.php';
    class ConsultasAlumno{
        private $con;
        public function ConsultasAlumno(){
            $this -> con= new Conexion();
        }

        public function RegistrarAlumno($user,$pass,$ape,$name){  
        $mysql= $this ->con->abrirConexion();
        $consulta="INSERT INTO Studens ( user, password, surname, name) VALUES ('$user','$pass','$ape','$name')";
        $result=mysqli_query($mysql,$consulta);
        if(!$result){
            die('0');
        }            
        echo'1';
        } 
    } 
    if($_POST['pass']==$_POST['pass2']){
        $user = $_POST['user'];
        $pass = $_POST['pass'];
        $ape = $_POST['surname'];
        $name = $_POST['name'];
        $e = new ConsultasAlumno();
        echo $e->RegistrarAlumno($user,$pass,$ape,$name);

    }else{
        echo '3';
    }     
?>