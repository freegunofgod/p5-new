<?php 

Class Post {
    private $_id;
    private $_title;
    private $_content;
    private $_chapo;
    private $_creation_date;
    private $_author;
    private $_comments;

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
    public function setId($id){
        $id = (int) $id;
        if($id > 0){
            $this->_id = $id;
        }
    }
    public function setTitle($title){
        $this->_title = $title;
    }
    public function setContent($content){
        $this->_content = $content;
    }
    public function setChapo($chapo){
        $this->_chapo = $chapo;
    }
    public function setAuthor_Id($authorID){
        $this->_author = $authorID;
    }
    public function setDate($date){
        $date = date($date);
        $this->_creation_date = $date;
    }
    public function id(){
        return $this->_id;
    }
    public function title(){
        return $this->_title;
    }
    public function content(){
        return $this->_content;
    }
    public function chapo(){
        return $this->_chapo;
    }
    public function author(){
        return $this->_author;
    }
    public function creationDate(){
        return $this->_creation_date;
    }
}