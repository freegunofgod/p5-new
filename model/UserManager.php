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
         //Get connect with database //SQL search
         $sql = $this->Dbconnect()->prepare("INSERT INTO user (login,password,email) values(?, ?, ?)");
         //Execture Query with fake data
         $sql->execute(array($login,$password,$email));
         
         return $sql->fetch();
    }

    public function deleteUser(){
        //delete an user
    }

    public function updateUser(){
        //update user information
    }
}