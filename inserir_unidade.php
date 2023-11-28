<?php 
session_start();
include 'conexao.php';

$nome = $_POST['txtnome'];
$email = $_POST['txtemail'];
$telefone = $_POST['txttel'];
$endereco = $_POST['txtendereco'];

$consulta = $cn->query("select email_unidade from tbl_unidades where email_unidade ='$email'");
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


if ($consulta->rowCount() == 1) {
    echo '<script>
    alert("O email digitado já está cadastro!");
    window.location.href = "FormLogin.php";
  </script>';

}else{

        $incluir = $cn->prepare("call inserir_unidade(?, ?, ?, ?)");
    
        $incluir->bindParam(1, $nome);
        $incluir->bindParam(2, $endereco);
        $incluir->bindParam(3, $email);
        $incluir->bindParam(4, $telefone);

        $incluir->execute();

    $mensagem = "Unidade $nome Adicionada com sucesso!";
    
    echo '<script>
            alert("' . $mensagem . '");
            window.location.href = "adm.php";
          </script>';
}
?>