<?php

$username = "root";
$password = "";
$database = "budget_app_php";
$host = "127.0.0.1";

$connection = mysqli_connect($host,$username,$password,$database);

if(!$connection) {
    die("Falha ao conectar à base de dados");
} else {
    echo "Conexão efetuada com sucesso";
}

?>