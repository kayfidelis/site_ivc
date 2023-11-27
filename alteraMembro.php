<?php

include 'conexao.php';  

$Id = $_GET['id_membro']; 


$consulta = $cn->query("SELECT * FROM tbl_membros WHERE nm_membro='$Id'"); 
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);


$nome = $_POST['txtnome'];  
$email = $_POST['txtemail'];  
$telefone = $_POST['txttel'];

try {
	
	$alterar = $cn->query("UPDATE tbl_membros SET  
	nm_membro = '$nome',
	email_membro = '$email',
	tel_membro = '$telefone' 
	WHERE nm_membro = '$Id' 	
	"); 
	
	echo '<script>alert("Informações alteradas com sucesso!");</script>';
    echo '<script>window.location.href = "index.php";</script>';
    exit();
	
} catch(PDOException $e) {  
	
	echo $e->getMessage();  
	
}



?>