<?php

require_once('Model.php');

class CommentManager extends Model {

    public function getComments(){
        return $this->getAll('comments', 'comment');
    }
    public function getComment($postID){
        return $this->getOnebyId('comments', 'comment', $postID);
    }
    // public function getAuthor($authorID){
    //     return $this->getOnebyId('comments', 'comment', $postID);
    // }
    // public function createComment($postID, $content){

    //     try {
    //         $sql = $this->Dbconnect()->prepare("INSERT INTO comments (post_id,author_id,content) values(?, 1, ?)");

    //         //Execture Query
    //         $sql = $sql->execute(array($postID,$content));

    //         if($sql == true){
    //             $success = 'Your comment as been added, it will be publish when an admin will validate it';
    //             $postID = $this->getLastInsertId();
    //         }else{
    //             throw new Exception('Execution error in createComment()');
    //         }
    //     } catch (Exception $e) {
    //         echo 'Error when trying to send comment : ' . $e->getMessage();
    //     }
    //     require('./view/post/singlePost.php');
    // }
    // public function updateComment($commentID, $content){
    //     try {
    //         $sql = $this->Dbconnect()->prepare("UPDATE `comments` SET `content` WHERE `id` = ? ");
    //         //Execture Query

    //         $sql = $sql->execute(array($commentID));

    //         if($sql == true){
    //             $success = 'Your comment has been edited with new content: ' . $content . ' ';

    //         }else{
    //             throw new Exception('Execution error');
    //         }
    //     } catch (Exception $e) {
    //         echo 'Error when trying to update comment in updateComment() ' . $e->getMessage();
    //     }
    // }
    // public function deleteComment($commentID){
    //     $sql = $this->Dbconnect()->prepare("DELETE FROM `comments` WHERE `id` = ? ");

    //     //Execture Query
    //     $sql = $sql->execute(array($commentID));

    //     if($sql == true){
    //         $success = 'Comment has been deleted';
    //     }else{
    //         throw new Exception('Execution Error');
    //     }
    // }
}