<?php 
require 'environment.php';

$config = array();

if(ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/projeto_os/");//criado para ser utilizado ao pegar arquivos de imagem, css, javascript..
    $config['dbname'] = 'controle_de_os';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://hostgator/projeto_os/");
    $config['dbname'] = 'controle_de_os';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'saulogator';
    $config['dbpass'] = '123';
}

global $db;
try{
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
}catch(PDOException $e) {
    echo "ERRO:".$e->getMessage();
    exit;
}