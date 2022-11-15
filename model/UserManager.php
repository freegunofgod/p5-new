<?php

require_once('DbManager.php');

class UserManager extends DbManager {

    public function getUser($login, $password){
        //Get connect with database //SQL search
        $sql = $this->Dbconnect()->prepare("SELECT * FROM user WHERE login= ? AND password= ?");
        //Execture Query with fake data
        $sql->execute(array($login,$password));
        
        return $sql->fetch();
    }

    public function createUser($login,$password,$email){

        $sql = $this->dbConnect()->prepare("SELECT * FROM users WHERE login = ?");
        $sql->execute(array($login));
        $rowCountSql = $sql->rowCount();

        if ($rowCountSql == 0) {

            //Get connect with database //SQL search
            $sql = $this->Dbconnect()->prepare("INSERT INTO users (login,password,email) values(?, ?, ?)");
            //Execture Query
            $sql->execute(array($login,$password,$email));

            $success = 'Votre compte a bien été crée :)';
            require('./view/createAccountPage.php');

        } else {
            $error = 'Ce nom d\'utilisateur est déjà pris :(';
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