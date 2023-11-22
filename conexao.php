<?php 

    $servidor = "localhost";
    $usuario = "admin";
    $senha = "ivc123456";
    $banco = "ivc";

    $cn = new PDO ("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    
?>
