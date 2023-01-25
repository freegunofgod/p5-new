<?php

require_once('DbManager.php');

class CommentManager extends DbManager {

    public function createComment($postID, $content){

        try {
            $sql = $this->Dbconnect()->prepare("INSERT INTO comments (post_id,author_id,content) values(?, 1, ?)");

            //Execture Query
            $sql = $sql->execute(array($postID,$content));

            if($sql == true){
                $success = 'Your comment as been added, it will be publish when an admin will validate it';
                $postID = $this->getLastInsertId();
            }else{
                throw new Exception('Execution error in createComment()');
            }
        } catch (Exception $e) {
            echo 'Error when trying to send comment : ' . $e->getMessage();
        }
        require('./view/post/singlePost.php');
    }
    public function getCommentByID($commentID){

        try{
            //Get connect with database //SQL search
            $sql = $this->Dbconnect()->prepare("SELECT * FROM comments WHERE id = ?");

            //Execture Query with fake data
            $sql->execute(array($commentID));

        }catch(Exception $e){
            throw new Exception('Error : cannot fetch comments in Comment Manager');
        }

        return $sql->fetch();
    }
    public function getComments(){

        try{
            //Get connect with database //SQL search
            $sql = $this->Dbconnect()->prepare("SELECT * FROM comments");

            //Execture Query with fake data
            $sql->execute();

        }catch(Exception $e){
            throw new Exception('Error : cannot fetch comments in Comment Manager');
        }

        return $sql->fetchAll();
    }
    public function getCommentsForPost($postID){
        try{
            //Get connect with database //SQL search
        $sql = $this->Dbconnect()->prepare("SELECT * FROM comments WHERE post_id = ? ");

        //Execture Query with fake data
        $sql->execute(array($postID));

        }catch(Exception $e){
            throw new Exception('Error : cannot fetch comments in Comment Manager');
        }
        
        return $sql->fetchAll();
    }
    public function updateComment($commentID, $content){
        try {
            $sql = $this->Dbconnect()->prepare("UPDATE `comments` SET `content` WHERE `id` = ? ");
            //Execture Query

            $sql = $sql->execute(array($commentID));

            if($sql == true){
                $success = 'Your comment has been edited with new content: ' . $content . ' ';

            }else{
                throw new Exception('Execution error');
            }
        } catch (Exception $e) {
            echo 'Error when trying to update comment in updateComment() ' . $e->getMessage();
        }
    }
    public function deleteComment($commentID){
        $sql = $this->Dbconnect()->prepare("DELETE FROM `comments` WHERE `id` = ? ");

        //Execture Query
        $sql = $sql->execute(array($commentID));

        if($sql == true){
            $success = 'Comment has been deleted';
        }else{
            throw new Exception('Execution Error');
        }
    }
}