<?php 

Class ControllerLogin{

    private $_postManager;
    private $_view;

    public function __construct($url){
        if(isset($url)){
            require_once('./view/login/loginPage.php');
        }else{
            throw new \Exception ('page introuvable (login controller)');
        }
    }
} 
?>