<?php 

Class ControllerBlog extends Controller{

    private $_postManager;
    private $_view;

    public function __construct($url){
            $this->posts();
    }

    private function posts(){
        $this->_postManager = new PostManager;
        $posts = $this->_postManager->getPosts();
        $this->_view = new View('Blog');
        $this->_view->generate(array('posts' => $posts));
    }
} 
?>