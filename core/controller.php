<?php
class controller {
    
    public function loadView($viewName,$viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'php';// requisição do arquivo na pasta views, o nome do arquivo é definido na homeControler.php na classe homeController.        
    }

    public function loadTemplate($viewName,$viewData = array()){//me manda parao template que chama o método loadViewIntemplate, dessa forma o topo do meu site que está no template, será o primeiro arquivo a aparecer e estará presente nas demais páginas.
        require 'views/template.php';  
    }

    public function loadViewInTemplate($viewName,$viewData = array()){
        extract($viewData);
        require 'views/'.$viewName.'.php';  
    }
}