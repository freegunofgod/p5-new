<?php

require_once('Model.php');

class UserManager extends Model {
    public function getUser($login){
        return $this->getOnebyName('users', 'User', $login);
    }

    // public function getUserByID($userID){

    //     try{
    //         //Get connect with database //SQL search
    //     $sql = $this->Dbconnect()->prepare("SELECT * FROM users WHERE id = ?");

    //     //Execture Query with fake data
    //     $sql->execute(array($userID));

    //     // throw new Exception('Error de connexion modèle  UserManager');
    //     }catch(Exception $e){
    //         echo('error' . $e->getMessage());
    //     }
        
    //     return $sql->fetchAll();
    // }

    // public function getUsers(){

    //     try{
    //         //Get connect with database //SQL search
    //     $sql = $this->Dbconnect()->prepare("SELECT * FROM users");

    //     //Execture Query with fake data
    //     $sql->execute();

    //     // throw new Exception('Error de connexion modèle  UserManager');
    //     }catch(Exception $e){
    //         echo('error' . $e->getMessage());
    //     }
        
    //     return $sql->fetchAll();
    // }
    // function verificationLabelPresent($input, $colonne){
    //         $sql = $this->dbConnect()->prepare("SELECT * FROM users WHERE ? = ?");
    //         $sql->execute(array($colonne, $input));
    //         $rowCountSql = $sql->rowCount();

    //         //if rowCountSQL > 0

    //             //Checking wich column we check

    //             //If email --> error email
    //             //return error email message

    //             //If login --> error login
    //             //return error login message
            
    //         //Else --> return success
    //         //A faire sous forme de fonction
    //         // $sql = $this->dbConnect()->prepare("SELECT * FROM users WHERE login = ?");
    //         // $sql->execute(array($login));
    //         // $rowCountSqlLogin = $sql->rowCount();

    //         // $sql = $this->dbConnect()->prepare("SELECT * FROM users WHERE email = ?");
    //         // $sql->execute(array($email));
    //         // $rowCountSqlEmail = $sql->rowCount();

    //         // if ($rowCountSqlEmail != 0){
    //         //     $error = 'Cette email est déjà pris :(';
    //         //     require('./view/createAccountPage.php');
    //         // }elseif($rowCountSqlLogin != 0) {
    //         //     $error = 'Ce nom d\'utilisateur est déjà pris :(';
    //         //     require('./view/createAccountPage.php');
    //     }
    // public function createUser($login,$password,$email){

    //     $login = htmlspecialchars( $login );
    //     $password = htmlspecialchars($password);
    //     $email = htmlspecialchars($email);

    //     // Using verificationLabelPresent --> return
    //     //if success
    //         //Get connect with database //SQL search
    //         $sql = $this->Dbconnect()->prepare("INSERT INTO users (login,password,email) values(?, ?, ?)");
    //         //Execture Query
    //         $sql->execute(array($login,$password,$email));

    //         $success = 'Votre compte a bien été crée :)';
    //     //If failure
    //         //Sending error message

    //     require('./view/login/createAccountPage.php');
    // }

    // public function deleteUser(){
    //     //delete an user
    // }

    // public function updateUser(){
    //     //update user information
    // }
}