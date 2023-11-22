<?php 
session_start();
include 'conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$senha = $_POST['txtsenha'];
$telefone = $_POST['txttel'];
$unidade = $_POST['txtunidade'];
$criptografada = md5($senha);

$consulta = $cn->query("select email_membro from tbl_membros where email_membro ='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


if ($consulta->rowCount() == 1) {
    header('location:erro1.php');

}else{

        $incluir = $cn->prepare("call inserir_membros(?, ?, ?, 0, ?, ?)");
    
        $incluir->bindParam(1, $unidade);
        $incluir->bindParam(2, $nome);
        $incluir->bindParam(3, $criptografada);
        $incluir->bindParam(4, $telefone);
        $incluir->bindParam(5, $email);

        $incluir->execute();

    $mensagem = "Cadastro realizado com sucesso, $nome! Agora você pode fazer seu login.";
    
    echo '<script>
            alert("' . $mensagem . '");
            window.location.href = "FormLogin.php";
          </script>';
}
?>