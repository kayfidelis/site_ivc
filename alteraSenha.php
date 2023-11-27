<?php
include "conexao.php";


$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$confirma = $_POST['txtconfirmasenha'];
$criptografada = md5($senha);
$criptografada2 = md5($confirma);

$consulta = $cn->query("select * from tbl_membros where email_membro ='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


if ($consulta->rowCount() == 0) {
    echo '<script>
    alert("O email digitado invalido!");
    window.location.href = "FormRecupera_Senha.php";
  </script>';
}

else if ($criptografada != $criptografada2 ){
	echo '<script>
    alert("As senhas estão diferentes");
    window.location.href = "FormRecupera_Senha.php";
  </script>';
}

else{
    $alterar = $cn->query("UPDATE tbl_membros SET senha = '$criptografada' WHERE email_membro = '$email'"); 

    echo '<script>
    alert("Senha alterada com sucesso!");
    window.location.href = "FormLogin.php";
  </script>';
}