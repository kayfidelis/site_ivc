<?php
include 'conexao.php';
session_start();

$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$criptografada = md5($senha);


$consulta = $cn->query("select id_membro, nm_membro, email_membro, senha, ds_status from tbl_membros where email_membro = '$email' and senha = '$criptografada'");

if ($consulta->rowCount() == 1) {
    $exibeMembro = $consulta->fetch(PDO::FETCH_ASSOC);
    $nomeMembro = $exibeMembro['nm_membro'];

    if ($exibeMembro['ds_status'] == 0) {
        $_SESSION['ID'] = $exibeMembro['id_membro'];
        $_SESSION['Status'] = 0;
        echo '<script>
        alert("Olá ' . $nomeMembro . ', bem-vindo ao nosso site.");
        window.location.href = "index.php";
      </script>';
    } else {
        $_SESSION['ID'] = $exibeMembro['id_membro'];
        $_SESSION['Status'] = 1;
        echo '<script>
        window.location.href = "index.php";
        alert("Olá Administrador ' . $nomeMembro . '");
      </script>';
    }
} else {
    echo '<script>
    window.location.href = "FormLogin.php";
    alert("Usuário ou senha incorreto!!");
  </script>';
}
//fim//
