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
        $controller->createAccount();
        break;
    default:
        $controller->homePage();
}