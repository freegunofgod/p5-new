<?php
//index.php

require 'controller/Controller.php';

$page = $_GET['action'] ?? 'home';
$controller = new Controller();

switch ($page) {
    case 'home':
        $controller->homePage();
        break;
    case 'login':
        if(!$_POST){
            require('./view/login/loginPage.php');
        }else{
            $user = $controller->login($_POST['login'],$_POST['password']);
            if($user == false){
                require('./view/login/loginPage.php');
            }else{
                header("LOCATION: http://localhost:8888/rendu/index.php?action=dashboard");
            }
        }
        break;
    case 'createAccount':
        if(!$_POST){
            require('./view/login/createAccountPage.php');
        }else{
            $controller->createUser($_POST['login'],$_POST['password'],$_POST['email']);
        }
        break;
    case 'dashboard':
        require('./view/dashboard/dashboard.php');
        break;
    case 'addPost':
        if(!$_POST){
            require('./view/post/addPost.php');
        }else{
            $controller->createPost($_POST['postTitle'],$_POST['postContent'],$_POST['postChapo']);
        }
        break;
    case 'viewPost':
        $posts = $controller->getPosts();
        require('./view/post/viewPost.php');
        break;
    default:
        $controller->homePage();
}