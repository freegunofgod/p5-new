<?php

require_once 'model/UserManager.php';

class Controller {
    public function homePage(){
        require 'view/homePage.php';
    }

    public function dashboard(){
        require 'view/dashboard.php';
    }

    public function login($login, $password){
        $userManager = new UserManager();
        $user = $userManager->getUser($login, $password);

        return $user;
    }
    //Correcte using of controller
    public function createUser($login,$password,$email){
        $userManager = new UserManager();
        $userManager->createUser($login,$password,$email);
    }
}