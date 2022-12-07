<?php

require_once('DbManager.php');

class PostManager extends DbManager {

    public function verifPostTitle(string $input){

        $sql = $this->dbConnect()->prepare("SELECT * FROM `posts` WHERE `title` = ? ");

        $sql->execute(array($input));

        $rowCountSql = $sql->rowCount();

        if($rowCountSql >= 1){
            return false;
        }else{
            return true;
        }
    }

    public function getPost($postID){

        try{
            //Get connect with database //SQL search
        $sql = $this->Dbconnect()->prepare("SELECT * FROM posts WHERE id= ? ");

        //Execture Query with fake data
        $sql->execute(array($postID));

        }catch(Exception $e){
            echo('error' . $e->getMessage());
        }
        
        return $sql->fetch();
    }

    public function getPosts(){

        try{
            //Get connect with database //SQL search
            $sql = $this->Dbconnect()->prepare("SELECT * FROM posts");

            //Execture Query with fake data
            $sql->execute();

        }catch(Exception $e){
            throw new Exception('Error : impossible de récupérer les posts dans PostManager');
        }

        return $sql->fetchAll();
    }

    public function createPost($title,$chapo,$content){

        try {

            $verif = $this->verifPostTitle($title);

            if($verif == false){
                $error = 'Title is already taken';
            }else{
                $sql = $this->Dbconnect()->prepare("INSERT INTO posts (title,chapo,content) values(?, ?, ?)");

                //Execture Query
                $sql = $sql->execute(array($title,$chapo,$content));

                if($sql == true){
                    $success = 'Votre post a bien été ajoutée : ' . $title . ' ';
                    $postID = $this->getLastInsertId();
                }else{
                    throw new Exception('Erreur execution');
                }
            }
        } catch (Exception $e) {
            echo 'Échec lors de l\'enregistrement du post : ' . $e->getMessage();
        }
        require('./view/post/addPost.php');
    }

    public function deletePost(){
        //delete an Post
    }

    public function updatePost(){
        //update Post information
    }
}