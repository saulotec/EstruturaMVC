<?php
class homeController extends controller {

    public function index(){
       $dados=array(
           'nome' => 'Saulo',
           'idade' => 30
       );

        $this->loadView('home',$dados)// através do meu homecontroller eu acesso o método loadView da minha classe controller que foi extendida para cá, esse método me envia para um arquivo de vizualisão, arquivo na pasta views.
    }
}