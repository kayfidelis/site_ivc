<!doctype html>

<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title> GRUTA.SB - Escolha do produto </title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <style>
       
    </style>

    
  <script>
    function AlertExcluir() {
        alert("Produto excluído com sucesso");
    }
  </script>
</head>

<body>

    <?php

    session_start();

    
    if (empty($_SESSION['Status']) || $_SESSION['Status'] != 1) {
        header('location:index.php');  
    }

    include 'conexao.php';

    $consulta = $cn->query("SELECT * from tbl_membros");

    ?>

    <div class="container-fluid">
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) {
        ?>


            <div class="row" style="margin-top: 15px;">

                <div class="col-sm-5">
                    <h4 style="padding-top:20px"><?php echo $exibe['nm_membro']; ?> <?php echo $exibe['tel_membro'] ?></h4>
                </div>
                <div class="col-sm-2" style="padding-top:20px">


                    <a href="FormAltera.php?id_membro=<?php echo $exibe['nm_membro']; ?> <?php echo $exibe['email_membro']; ?> <?php echo $exibe['tel_membro']; ?>">
                        <button class="btn btn-lg btn-block btn-default">
                            <span class="glyphicon glyphicon-refresh"> Alterar</span>
                        </button>
                    </a>

                </div>
                <div class="col-sm-2 col-xs-offset-right-1" style="padding-top:20px">
                    <a onclick="AlertExcluir()" href="excluir.php?id=<?php echo $exibe['id_membro']; ?>">
                        <button class="btn btn-lg btn-block btn-danger">
                            <span class="glyphicon glyphicon-remove"> Excluir</span>
                        </button>
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>
</body>

</html>