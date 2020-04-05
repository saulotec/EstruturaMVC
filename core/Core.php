<?php
class Core {
    public function rum() {
       
        $url = '/';
        if(isset($_GET['url'])) { // se a URL estiver definida, eu vou concatenar ela com uma /, exemplo /url, caso não tiver nada na url, minha url é uma /.
            $url .= $_GET['url'];
        }

        if(!empty($url) && $url != '/') { // se a url não estiver vazia e for diferente de uma /barra segue o bloco de  comando.
            $url = explode('/',$url);
            array_shift($url);//remove o primeiro registro do array, tornando o próximo registro chave 0 do array, isso foi feito pq o meu  array[0] erra nulo..

            $currentController = $url[0].'Controller';//concateno com Controler para poder utilizar minha classe de comando controller;
            array_shift($url); // como eu já peguei meu Controller, eu elimino ele em seguida para poder pegar meu action, que será minha $url[0].

            if(isset($url[0]) && !empty($url)) {// se através da url veio o novo url[0] que antes era o $url[1], meu action será ele.
                $currentAction = $url[0];
            }else{// caso contrário meu action é o padrão, o index.
                $currentAction ='index';
            }
           

        }else{ //caso contrário defino minhas variáveis conforme abaixo, a parte inicial do meu sistema/site controller com home e action como index.
            $currentController = 'homeController';
            $currentAction = 'index';
        }
        echo "CONTROLLER: ".$currentController."<br/>";
        echo "ACTION: ".$currentAction."<br/>";

    }
}