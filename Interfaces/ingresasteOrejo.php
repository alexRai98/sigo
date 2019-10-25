<?php
    require_once("class.OrejoTemplate.php");
    require_once("../Utilidades/scripts.php");
    session_start();
    class ingresasteOrejo{
        private $html;
        public function ingresasteOrejo(){
            if($_SESSION['usuario'] == null || $_SESSION['usuario'] ==''){
                header("Location:cerrarSession.php");
            }
            $this->html= new OrejoTemplate("ingresaste.html");
            $this->html->reemplaza("titulo","Inicio");
        }
        public function user (){
            $this->html->iniciaBloque("user");
            $this->html->reemplazaEnBloque("usuario",$_SESSION['usuario'],"user");
        }
        // public function contenido(){
        //     $this->html->iniciarBloque("body");
        //     $this->html->reemplazarEnBLoque("id","Ingresaste","body");
        // }
        public function __destruct(){
            $this->html->presentaPlantilla();
        }
    }
    $ingresa = new ingresasteOrejo();
    $ingresa->user();
    // $ingresa->contenido();
?>