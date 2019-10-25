<?php
    class usuario{
	private $id;
	private $nombres;
	private $apellidos;
	private $login;
	private $clave;

	public function Usuario($id, $nombres, $apellidos, $login, $clave){
		$this->setId($id);
		$this->setNombre($nombres);
		$this->setApellidos($apellidos);
		$this->setLogin($login);
		$this->setClave($clave);
	}
	public function setId($id){
		$this->id=$id;
	}
	public function getId(){
		return $this->id;
	}

	public function setNombre($nombres){
		$this->nombres=$nombres;
	}
	public function getNombres(){
		return $this->nombres;
	}

	public function setApellidos($apellidos){
		$this->apellidos=$apellidos;
	}
	public function getApellidos(){
		return $this->apellidos;
	}

	public function setLogin($login){
		$this->login=$login;
	}
	public function getLogin(){
		return $this->login;
	}
	public function setClave($clave){
		$this->clave=$clave;
	}
	public function getClave(){
		return $this->clave;
	}

}
?>
