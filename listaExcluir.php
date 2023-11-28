<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <title>GRUTA.SB - Escolha do produto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f8f8;
            padding-top: 20px;
        }

        .container {
            margin-top: 20px;
        }

        .member-card {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 5px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
        }

        .delete-btn {
            margin-top: 10px;
        }

        h4 {
            margin: 0;
        }

        .btn-danger {
            background-color: #d9534f;
            border-color: #d9534f;
        }

        .btn-danger:hover,
        .btn-danger:focus {
            background-color: #c9302c;
            border-color: #ac2925;
        }
    </style>

    <script>
        function AlertExcluir() {
            alert("Membro excluído com sucesso");
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

    <div class="container">
        <?php while ($exibe = $consulta->fetch(PDO::FETCH_ASSOC)) { ?>
            <div class="row member-card">
                <div class="col-sm-5">
                    <h4><?php echo $exibe['nm_membro']; ?> - <?php echo $exibe['tel_membro'] ?></h4>
                </div>
                <div class="col-sm-2">
                    <a onclick="AlertExcluir()" href="excluir.php?id=<?php echo $exibe['id_membro']; ?>" class="btn btn-danger delete-btn">
                        Excluir
                    </a>
                </div>
            </div>
        <?php } ?>
    </div>


</body>

</html>