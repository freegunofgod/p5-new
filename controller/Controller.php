<?php

require_once 'model/UserManager.php';

class Controller {
    public function homePage(){
        require 'view/homePage.php';
    }
    public function login(){
        if(isset($_POST['login']) && isset($_POST['password'])){

            $login = $_POST['login'];
            $password = $_POST['password'];

            $userManager = new UserManager();
            $user = $userManager->getUser($login, $password);

            if ($user['login'] === $login && $user['password'] ===  $password) {
                $loggedUser = [
                    'email' => $user['email'],
                ];
            } else {
                $errorMessage = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                    $_POST['email'],
                    $_POST['password']
                );
            }
        }
        require 'view/loginPage.php';
    }
    public function createUser($login,$password,$email){

        $userManager = new UserManager();
        $userManager->createUser($login,$password,$email);
        
    }
}