<?php
/* Não utilizado para o prototipo */
/* Configuracao de autenticacao para o banco de dados */
$config = array(
    "db" => array(
        "db_mysql" => array(
            "dbname" => "db_sart",
            "username" => "sart_dev",
            "password" => "s@@rt!d3v",
            "host" => "localhost"
        )
    )
);

defined("DIRETORIO_TEMPLATES")
    or define("DIRETORIO_TEMPLATES", realpath(dirname(__FILE__) . '/templates'));
?>