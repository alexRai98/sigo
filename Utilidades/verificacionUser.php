<?php
    require_once 'consultasLogin.php';
    require_once '../entidades/usuario.php';
    class verificacionUser{
        private $data;
        public function verificaAlumno($user,$contra){
            $datos =new consultasLogin();
            $usuario = $datos->DatosAlumno();
            $json =array();
            for($i=0;$i<count($usuario);$i++){
                    if ($user==$usuario[$i]->getLogin() && $contra==$usuario[$i]->getClave()){
                        $json = array(
                                'id' => $usuario[$i]->getId(),
                                'nombre' => $usuario[$i]->getNombres(),
                                'apellidos' => $usuario[$i]->getApellidos(),
                                'login' => $usuario[$i]->getLogin(),
                                'clave' => $usuario[$i] ->getClave(),
                        );                                 
                    }
            }
            echo $this->data= json_encode($json);
        }
        public function verificaTeacher($user,$contra){
                $datos =new consultasLogin();
                $usuario = $datos->DatosProfesor();
                $json = array();
                for($i=0;$i<count($usuario);$i++){
                        if ($user==$usuario[$i]->getLogin() && $contra==$usuario[$i]->getClave()){
                                $json = array(
                                        'id' => $usuario[$i]->getId(),
                                        'nombre' => $usuario[$i]->getNombres(),
                                        'apellidos' => $usuario[$i]->getApellidos(),
                                        'login' => $usuario[$i]->getLogin(),
                                        'clave' => $usuario[$i] ->getClave(),

                                );                                
                                $this->data= json_encode($json);
                        }
                }
                echo $this->data;      
            }
}
if(isset($_POST['user'])){
        $a = new verificacionUser();
        $a->verificaAlumno($_POST['user'],$_POST['pass']);
}
if(isset($_POST['userTeach'])){
        $a = new verificacionUser();
        $a->verificaTeacher($_POST['userTeach'],$_POST['passTeach']);
}
?>