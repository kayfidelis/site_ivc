<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>IVC - Área Administrativa</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <style>
        .container-fluid {
            margin-top: 5vw;
            margin-bottom: 5vw;
        }
    </style>


</head>

<body>

    <?php

    session_start();

    if (empty($_SESSION['Status']) || $_SESSION['Status'] != 1) {
        header('location:index.php');
    }

    include 'conexao.php';

    ?>

    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-4 col-sm-offset-4 text-center">

                <h2>Área administrativa</h2>
                </br>
                <a href="FormAdministrador.php">
                    <button type="submit" class="btn btn-block btn-lg btn-primary">
                        Adicionar Administrador
                    </button>
                </a>
                </br>
                <a href="listaExcluir.php">
                    <button type="submit" class="btn btn-block btn-lg btn-warning">
                        Excluir Membros
                    </button>
                </a>
                </br>
                <a href="FormUnidade.php">
                    <button type="submit" class="btn btn-block btn-lg btn-success">
                        Adicionar Unidade
                    </button>
                </a>
                <br />
                <a href="sair.php">
                    <button type="submit" class="btn btn-block btn-lg btn-danger">
                        Sair do perfil administrativo
                    </button>
                </a>

            </div>
        </div>
    </div>

</body>

</html>