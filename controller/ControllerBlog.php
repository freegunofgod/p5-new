<?php 

Class ControllerBlog{

    private $_postManager;
    private $_view;

    public function __construct($url){
            $this->articles();
    }

    private function articles(){
        $this->_postManager = new PostManager;
        $articles = $this->_postManager->getPosts();
        $this->_view = new View('Blog'); 
        $this->_view->generate(array('articles' => $articles));
    }
} 
?>