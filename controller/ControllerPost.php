<?php

require_once('model/Model.php');

Class ControllerPost extends Controller{

    private $_postManager;
    private $_commentManager;
    private $_view;

    public function __construct($url){
        if(isset($url) && count($url) < 1){
            throw new \Exception('Page introuvable');
        }elseif(isset($_GET['create'])){
            $this->create();
        }else{
            $this->post();
        }
    }

    private function post(){
        if(isset($_GET['id'])){
            $this->_postManager = new PostManager;
            $this->_commentManager = new CommentManager;

            $post = $this->_postManager->getPost($_GET['id']);
            $comments = $this->_commentManager->getComment($_GET['id']);

            $this->_view = new View('Post'); 
            $this->_view->generate(array('post' => $post, 'comments' => $comments));
        }
    }

    public function create(){
        $postManager = new PostManager();
        $this->_view = new View('CreatePost');
        // $this->_view->generateForm();
    }
} 
?>