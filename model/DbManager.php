<?php

abstract class DbManager{

    private $bdd;

    protected function dbConnect(){
        if ($this->bdd == null) {
            try {
                $this->bdd = new PDO('mysql:dbname=p5;host=localhost;charset=utf8', 'root', 'root');
            } catch (PDOException $e) {
                echo 'Échec lors de la connexion : ' . $e->getMessage();
            }
        }
        return $this->bdd;
    }

}