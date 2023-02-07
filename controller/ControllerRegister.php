<?php 

Class ControllerRegister extends Controller{

    private $_postManager;
    private $_view;

    public function __construct($url){
        if(isset($url)){
            $this->_view = new View('login/register'); 
            $this->_view->generate(array());
        }else{
            throw new \Exception ('page introuvable (login controller)');
        }
    }
} 
?>