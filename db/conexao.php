<?php

$servidor = "localhost";
$user = "user";
$password = "password";
$database = "database";


$conexao = mysqli_connect($servidor, $user, $password, $database) or die ('Não foi possível conectar');
?>
