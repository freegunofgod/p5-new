<?php

require 'controller/Controller.php';

//index.php

$page = $_GET['action'] ?? 'home';
$controller = new Controller();

switch ($page) {
    case 'home':
        $controller->homePage();
        break;
    default:
        $controller->homePage();
}