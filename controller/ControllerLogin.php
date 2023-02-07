<?php 

Class ControllerLogin extends Controller{

    private $_userManager;
    private $_view;

    public function __construct($url){
        //On teste si la variable
        //Post existe pour le login
        //et le mot de passe
        if(isset($_POST['login']) && isset($_POST['password'])){
            //Si oui, je récupère l'user en BDD
            $login = $this->login($_POST['login']);

            if(isset($login) && $login != false){
                $_SESSION['login'] = $login[0]->login();

                $this->_view = new View('dashboard/dashboard');
                $this->_view->generate(array());
            }elseif($login == false){
                $this->_view = new View('login/login'); 
                $this->_view->generate(array());
            }
        }elseif(isset($url)){
            $this->_view = new View('login/login'); 
            $this->_view->generate(array());
        }
        else{
            throw new \Exception ('page introuvable (login controller)');
        }
    }

    public function login($login){

        $this->_userManager = new UserManager;

        $data = $this->_userManager->getUser($login);

        if($data == false){
            return false;
        }

        return $data;
    }
} 
?>