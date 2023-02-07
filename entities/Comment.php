<?php 

class Comment extends CommentManager {
    public $id;
    public $authorID;
    public $postID;
    public $creationDate;
    public $content;
    public $data = [];

    public function __construct($id)
    {
        $this->data = CommentManager::getCommentByID($this->id);
    }

}