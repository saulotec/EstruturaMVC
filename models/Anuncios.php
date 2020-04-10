<?php 
class Anuncios extends model {// a classe model é extendida pois ela é que faz a comunicação com o banco de dados através da variável global $db.   
        
    public function getQuantidade() {// aqui eu posso fazer uma requisição ao banco de dados, pegar algum dado... 

        $sql = "SELECT COUNT(*) as c FROM anuncios";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){

            $sql = $sql->fetch();
            return $sql['c'];
        }else{

            return 0;
        }
    }
}