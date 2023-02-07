<?php 

Class ControllerRegister{

    private $_postManager;
    private $_view;

    public function __construct($url){
        if(isset($url)){
            require_once('./view/login/createAccountPage.php');
        }else{
            throw new \Exception ('page introuvable (login controller)');
        }
    }
} 
?>