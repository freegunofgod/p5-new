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
            require('./view/loginPage.php');
        }else{
            $user = $controller->login($_POST['login'],$_POST['password']);
            if($user == false){
                require('./view/loginPage.php');
            }else{
                header("LOCATION: http://localhost:8888/rendu/index.php?action=dashboard");
            }
        }
        break;
    case 'createAccount':
        if(!$_POST){
            require('./view/createAccountPage.php');
        }else{
            $controller->createUser($_POST['login'],$_POST['password'],$_POST['email']);
        }
        break;
    case 'dashboard':
        require('./view/dashboard.php');
        break;
    default:
        $controller->homePage();
}