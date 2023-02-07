<?php 

Class Post {

    private $_id;
    private $_title;
    private $_content;
    private $_chapo;
    private $_date_creation;
    private $_author;

    public function __construct(array $data){
        $this->hydrate($data);
    }
    public function hydrate($data){
        foreach($data as $key=>$value){
            $method = 'set'.ucfirst($key);
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
    public function setAuthor(){
        $this->_author = 'Henry';
    }
    public function setCreationDate($creation_Date){
        $this->_date_creation = $creation_Date;
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
        $this->_author = 'Henry';
        return $this->_author;
    }
    public function creationDate(){
        return $this->_date_creation;
    }
}