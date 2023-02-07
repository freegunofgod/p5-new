<?php 

class View {

    private $_file;

    private $_template;

    public function __construct($_action){
        $this->_file = 'view/' . $_action . 'Page.php'; 
    }

    public function generate($data){
        $content = $this->generateFile($this->_file, $data);

        $view = $this->generateFile('view/layout.php', array('title' => $this->_template, 'content'=>$content));
        echo $view;
    }

    private function generateFile($file, $data){
        if(file_exists($file)){
            extract($data);

            ob_start();

            require($file);

            return ob_get_clean();
        }else{
            throw new \Exception('Fichier' . $file . ' introuvable en tant que view', 1);
        }
    }
}