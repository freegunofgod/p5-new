<?php
require_once 'view/View.php';
/**
 *
 */
class Router
{
  private $_ctrl;
  private $_view;

  public function routeReq(){

    try {
      //chargement automatique des classes du dossier models
      spl_autoload_register(function ($class) {
        if (file_exists('entities/' . $class . '.php')){
          require_once('entities/'.$class.'.php');
        }elseif(file_exists('model/' . $class . '.php')){
          require_once('model/'.$class.'.php');
        }
      });

      //on crée une variable $url
      $url = '';

      //on va determiner le controleur en
      //fonction de la valeur de cette variable
      if (isset($_GET['url'])) {
        //on décompose l'url et on lui applique un filtre
        $url = explode('/', filter_var($_GET['url'], FILTER_SANITIZE_URL));

        //on recupere le premier parametre de url
        //on le met tout en miniscule
        //on met sa premiere lettre en majuscule
        $controller = ucfirst(strtolower($url[0]));

        $controllerClass = "Controller".$controller;

        //on retrouve le chemin du controleur voulu
        $controllerFile = "./controller/".$controllerClass.".php";
        
        //on check si le fichier du controleur existe
        if (file_exists($controllerFile)) {
          //on lance la classe en question
          //avec tous les parametres url
          //pour respecter l'encapsulation
          require_once($controllerFile);

          $this->_ctrl = new $controllerClass($url);
        }
        else {
          throw new \Exception("Page introuvable", 1);
        }
      }
      else {
        // require_once('ControllerBlog.php');
        // $this->_ctrl = new ControllerBlog($url);
      }
    } catch (\Exception $e) {
      $errorMsg = $e->getMessage();
      $this->_view = new View('Error'); 
      $this->_view->generate(array('errorMsg' => $errorMsg));
    }
  }
}
?>