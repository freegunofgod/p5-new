<?php
abstract class Model
{
    private static $_bdd;

    //connexion a la bdd

    private static function setBdd(){
        self::$_bdd = new PDO('mysql:host=localhost;dbname=p5;charset=utf8', 'root', 'root');

        //on utilise les constantes de PDO pour gérer les erreurs
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }

    //fonction de connexion par defaut a la bdd
    protected function getBdd(){
        if (self::$_bdd == null) {
        self::setBdd();
        return self::$_bdd;
        }
    }

    //creation de la methode
    //de récupération de liste d'elements
    //dans la bdd 
    protected function getAll($table, $obj){
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare('SELECT * FROM '.$table.' ORDER BY id desc');
        $req->execute();

        //on crée la variable data qui
        //va obtenir les données
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        // var contiendra les données sous forme d'objets
        $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }

    protected function getOnebyId($table, $obj, $id)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT *  FROM " .$table. " WHERE id = ?");
        $req->execute(array($id));
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }

    protected function getOnebyName($table, $obj, $name)
    {
        $this->getBdd();
        $var = [];
        $req = self::$_bdd->prepare("SELECT *  FROM " .$table. " WHERE login = ?");
        $req->execute(array($name));
        while ($data = $req->fetch(PDO::FETCH_ASSOC)) {
        $var[] = new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }

    protected function createOne($table, $obj)
    {
        $this->getBdd();
        $req = self::$_bdd->prepare("INSERT INTO ".$table." (title, content, date) VALUES (?, ?, ?)");
        $req->execute(array($_POST['title'], $_POST['content'], date("d.m.Y")));

        $req->closeCursor();
    }

    protected function getLastInsertId(){
        return $this->_bdd->lastInsertId();
    }
}