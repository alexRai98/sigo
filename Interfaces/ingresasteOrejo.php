<?php
    require_once("class.OrejoTemplate.php");
    class ingresasteOrejo{
        private $html;
        public function ingresasteOrejo(){
            $this->html= new OrejoTemplate("ingresaste.html");
            $this->html->reemplaza("titulo","Ingresaste");
        }
        public function user ($user){
            $this->html->iniciaBloque("user");
            $this->html->reemplazaEnBloque("usuario",$user,"user");
        }
        public function __destruct(){
            $this->html->presentaPlantilla();
        }
    }
    if(isset($_GET['user'])){
        $u=$_GET['user'];
    }else{
        $u="none";
    }
    $user = new ingresasteOrejo();
    $user->user($u);
    
?>