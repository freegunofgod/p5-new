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
    public function createAccount(){
        if(isset($_POST['login']) && isset($_POST['password'])  && isset($_POST['email'])){

            $email    = $_POST['email'];
            $login    = $_POST['login'];
            $password = $_POST['password'];

            $userManager = new UserManager();

            try{
                $userManager->createUser($email, $login, $password);
            }catch (PDOException $e) {
                echo 'Échec lors de la création de votre compte : ' . $e->getMessage();
            }
        }
        require 'view/createAccountPage.php';
    }
}