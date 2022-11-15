<?php

require_once('DbManager.php');

class UserManager extends DbManager {

    public function getUser($login, $password){

        //Get connect with database //SQL search
        $sql = $this->Dbconnect()->prepare("SELECT * FROM users WHERE login=? and password=?");

        //Execture Query with fake data
        $sql->execute(array($login,$password));
        
        return $sql->fetch();
    }

    public function createUser($login,$password,$email){

        $login = htmlspecialchars( $login );
        $password = htmlspecialchars($password);
        $email = htmlspecialchars($email);

        $sql = $this->dbConnect()->prepare("SELECT * FROM users WHERE login = ?");
        $sql->execute(array($login));
        $rowCountSqlLogin = $sql->rowCount();

        $sql = $this->dbConnect()->prepare("SELECT * FROM users WHERE email = ?");
        $sql->execute(array($email));
        $rowCountSqlEmail = $sql->rowCount();

        if ($rowCountSqlEmail != 0){
            $error = 'Cette email est déjà pris :(';
            require('./view/createAccountPage.php');
        }elseif($rowCountSqlLogin != 0) {
            $error = 'Ce nom d\'utilisateur est déjà pris :(';
            require('./view/createAccountPage.php');
        }else{
            //Get connect with database //SQL search
            $sql = $this->Dbconnect()->prepare("INSERT INTO users (login,password,email) values(?, ?, ?)");
            //Execture Query
            $sql->execute(array($login,$password,$email));

            $success = 'Votre compte a bien été crée :)';
            require('./view/createAccountPage.php');
        }
    }

    public function deleteUser(){
        //delete an user
    }

    public function updateUser(){
        //update user information
    }
}