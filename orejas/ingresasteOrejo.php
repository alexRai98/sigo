<?php
    require_once("../Utilidades/class.OrejoTemplate.php");
    require_once("../Utilidades/scripts.php");
    session_start();
    class ingresasteOrejo{
        private $html;
        public function ingresasteOrejo(){
            if($_SESSION['usuario'] == null || $_SESSION['usuario'] ==''){
                header("Location:../Utilidades/cerrarSession.php");
            }
            $this->html= new OrejoTemplate("ingresaste.html");
            $this->html->reemplaza("titulo","Inicio");
        }
        public function user (){
            $this->html->iniciaBloque("user");
            $this->html->reemplazaEnBloque("usuario",$_SESSION['usuario'],"user");
        }

        public function __destruct(){
            $this->html->presentaPlantilla();
        }
    }
    $ingresa = new ingresasteOrejo();
    $ingresa->user();

?>