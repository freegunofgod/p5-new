<?php 

Class User {

    private $_id;
    private $_login;
    private $_password;
    private $_email;
    private $_role;

    public function __construct(array $data){
        $this->hydrate($data);
    }
    public function hydrate($data){
        foreach($data as $key=>$value){
            $method = 'set'.ucwords($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }
    public function setId($id){
        $id = (int) $id;
        if($id > 0){
            $this->_id = $id;
        }
    }
    public function setLogin($login){
        $this->_login = $login;
    }
    public function setPassword($password){
        $this->_password = $password;
    }
    public function setEmail($email){
        $this->_email = $email;
    }
    public function setRole($role){
        $this->_role = $role;
    }
    public function id(){
        return $this->_id;
    }
    public function login(){
        return $this->_login;
    }
    public function password(){
        return $this->_password;
    }
    public function email(){
        return $this->_email;
    }
    public function role(){
        return $this->_role;
    }
}