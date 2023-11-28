<?php
include 'conexao.php';

$id = $_GET['id'];


$consulta = $cn->prepare("SELECT id_membro FROM tbl_membros WHERE id_membro = :id");
$consulta->bindParam(':id', $id, PDO::PARAM_INT);
$consulta->execute();
$exibe = $consulta->fetch(PDO::FETCH_ASSOC);

$excluir = $cn->prepare("DELETE FROM tbl_membros WHERE id_membro = :id");
$excluir->bindParam(':id', $id, PDO::PARAM_INT);

$excluir->execute();

echo '<script>
            window.location.href = "listaExcluir.php";
          </script>';
