<?php
    require_once("class.OrejoTemplate.php");
    session_start();
    class ingresasteOrejo{
        private $html;
        public function ingresasteOrejo(){
            if($_SESSION['usuario'] == null || $_SESSION['usuario'] ==''){
                header("Location:cerrarSession.php");
            }
            $this->html= new OrejoTemplate("ingresaste.html");
            $this->html->reemplaza("titulo","Ingresaste");
        }
        public function user (){
            $this->html->iniciaBloque("user");
            $this->html->reemplazaEnBloque("usuario",$_SESSION['usuario'],"user");
        }
        public function __destruct(){
            $this->html->presentaPlantilla();
        }
    }
    $user = new ingresasteOrejo();
    $user->user();
    
?>