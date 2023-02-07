<?php 

Class ControllerDashboard extends Controller{

    private $_postManager;
    private $_view;

    public function __construct(){
        if(!isset($user)){
            $this->_view = new View('dashboard/dashboard'); 
            $this->_view->generate(array());
        }else{
            throw new \Exception('Utilisateur introuvable / non connecté');
        }
       
    }
} 
?>