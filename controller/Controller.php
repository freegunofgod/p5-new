<?php
require_once 'model/Model.php';
require_once 'model/UserManager.php';
require_once 'model/PostManager.php';
require_once 'model/CommentManager.php';

class Controller {
    
    public function __construct(){
        session_start();
    }

    // public function createUser($login,$password,$email){
    //     $userManager = new UserManager();
    //     $userManager->createUser($login,$password,$email);
    // }

    

    // public function createComment($postID, $content){
    //     $commentManager = new CommentManager();
    //     $commentManager->createComment($postID, $content);
    // }

    // public function getCommentsForPost($postID){
    //     $commentManager = new CommentManager();
    //     $comments = $commentManager->getCommentsForPost($postID);

    //     return $comments;
    // }
    // public function getAuhorsFromPost($auhtorID){
    //     $userManager = new UserManager();
    //     $authors = $userManager->getUserByID($auhtorID);

    //     return $authors;
    // }
    // public function getPosts(){
    //     $postManager = new PostManager();
    //     $posts = $postManager->getPosts();

    //     return $posts;
    // }
    // public function getPost($postID){

    //     //Faire la logique du poste ici
        
    //     $postManager = new PostManager();
    //     $post = $postManager->getPost($postID);

    //     return $post;
    // }

    // public function updatePost( $title, $content, $chapo, $postID){
    //     $postManager = new PostManager();
    //     $post = $postManager->getPost($postID);
    //     $postManager->updatePost($title, $content, $chapo, $postID);
    // }

    // public function deletePost($postID){
    //     $postManager = new PostManager();
    //     $postManager->deletePost($postID);
    // }
}