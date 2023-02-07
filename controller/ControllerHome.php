<?php 

Class ControllerHome{

    private $_postManager;
    private $_view;

    public function __construct($url){
        $this->_view = new View('Home'); 
        $this->_view->generate(array());
    }
} 
?>