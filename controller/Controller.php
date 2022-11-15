<?php

require_once 'model/UserManager.php';

class Controller {
    public function homePage(){
        require 'view/homePage.php';
    }
    //Incorrect using of controler
    public function login($login, $password){

        $userManager = new UserManager();
        $user = $userManager->getUser($login, $password);

        if ($user === false) {
            $errorMessage = 'Nom d\'utilisateur et/ou mot de passe incorrect :(';
            require('view/frontend/loginView.php');

        }else {

            $_SESSION['login'] = $user['login'];
            $_SESSION['status'] = 'connect';

            $loggedUser = [
                'email' => $user['email'],
                'login' => $user['login'],
            ];

        }
        require 'view/loginPage.php';
    }
    //Correcte using of controller
    public function createUser($login,$password,$email){

        $userManager = new UserManager();
        $userManager->createUser($login,$password,$email);
        
    }
}