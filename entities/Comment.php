<?php 

class Comment extends CommentManager {
    public $id;
    public $authorID;
    public $postID;
    public $date_creation;
    public $content;

    public function __construct(array $data){
        $this->hydrate($data);
    }
    public function hydrate($data){
        foreach($data as $key=>$value){
            $method = 'set'.ucwords($key);
            if(method_exists($this, $method)){
                $this->$method($value);
            }
        }
    }

    /**
     *  the value of id
     */ 
    public function id()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     *  the value of date_creation
     */ 
    public function dateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of date_creation
     *
     * @return  self
     */ 
    public function setDate_Creation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     *  the value of authorID
     */ 
    public function authorId()
    {
        //ICI ON RECUP LA FONCTION DU MODEL POUR LAUTEUR
        return $this->authorID;
    }

    /**
     * Set the value of authorID
     *
     * @return  self
     */ 
    public function setAuthor_Id($authorID)
    {
        $this->authorID = $authorID;

        return $this;
    }

    /**
     *  the value of postID
     */ 
    public function postId()
    {
        return $this->postID;
    }

    /**
     * Set the value of postID
     *
     * @return  self
     */ 
    public function setPost_Id($postID)
    {
        $this->postID = $postID;

        return $this;
    }

    /**
     *  the value of content
     */ 
    public function content()
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @return  self
     */ 
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }
}