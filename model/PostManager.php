<?php

require_once('Model.php');

class PostManager extends Model {
    public function getPosts(){
        return $this->getAll('posts', 'post');
    }
    public function getPost($postID){
        return $this->getOnebyId('posts', 'post', $postID);
    }
    // public function verifPostTitle(string $input){

    //     $sql = $this->dbConnect()->prepare("SELECT * FROM `posts` WHERE `title` = ? ");

    //     $sql->execute(array($input));

    //     $rowCountSql = $sql->rowCount();

    //     if($rowCountSql >= 1){
    //         return false;
    //     }else{
    //         return true;
    //     }
    // }
    // public function createPost($title,$chapo,$content){

    //     try {

    //         $verif = $this->verifPostTitle($title);

    //         if($verif == false){
    //             $error = 'Title is already taken';
    //         }else{
    //             $sql = $this->Dbconnect()->prepare("INSERT INTO posts (title,chapo,content) values(?, ?, ?)");

    //             //Execture Query
    //             $sql = $sql->execute(array($title,$chapo,$content));

    //             if($sql == true){
    //                 $success = 'Votre post a bien été ajoutée : ' . $title . ' ';
    //                 $postID = $this->getLastInsertId();
    //             }else{
    //                 throw new Exception('Erreur execution');
    //             }
    //         }
    //     } catch (Exception $e) {
    //         echo 'Échec lors de l\'enregistrement du post : ' . $e->getMessage();
    //     }
    //     require('./view/post/addPost.php');
    // }
    // public function deletePost($postID){
    //     $sql = $this->Dbconnect()->prepare("DELETE FROM `posts` WHERE `id` = ? ");

    //     //Execture Query
    //     $sql = $sql->execute(array($postID));

    //     if($sql == true){
    //         $success = 'Votre post a bien été supprimé.';
    //     }else{
    //         throw new Exception('Erreur execution');
    //     }
    // }
    // public function updatePost($title, $content, $chapo, $postID){
    //     try {
    //         $verif = $this->verifPostTitle($title);

    //         if($verif == false){
    //             $error = 'Title is already taken';
            
    //         }else{
    //             $sql = $this->Dbconnect()->prepare("UPDATE `posts` SET `title` = ? ,`chapo` = ? ,`content` = ? WHERE `id` = ? ");
    //             //Execture Query

    //             $sql = $sql->execute(array($title, $chapo, $content, $postID));

    //             if($sql == true){
    //                 $success = 'Votre post a bien été modifier : ' . $title . ' ';

    //             }else{
    //                 throw new Exception('Erreur execution');
    //             }
    //         }
    //     } catch (Exception $e) {
    //         echo 'Échec lors de la modification du post : ' . $e->getMessage();
    //     }
    // }
}