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
        $controller->login();
        break;
    case 'createAccount':
        if(!$_POST){
            require('./view/createAccountPage.php');
        }else{
            $controller->createUser($_POST['login'],$_POST['password'],$_POST['email']);
        }
        break;
    default:
        $controller->homePage();
}