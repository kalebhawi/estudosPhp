<?php

$user = $_GET['email'];
$pass = $_GET['pass'];
$btn = $_GET['logar'];

if($user == "klblps@yahoo.com.br" or $pass == "123"){
    header("Location: painel.php");
} else{
    header("Location: index.php");
}