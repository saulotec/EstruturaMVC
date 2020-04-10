<?php
class homeController extends controller {
    $anuncios = new Anuncios;

    public function index(){
       $dados=array(
           'nome' => 'Saulo',
           'idade' => $anuncios->getQuantidade()
       );

        $this->loadTemplate('home',$dados)// através do meu homecontroller eu acesso o método loadTemplate da minha classe controller que foi extendida para cá. Template é a parte estática do meu site, que vai ser usada em todos os arquivos, geralmente o topo e rodapé do meu site.
}