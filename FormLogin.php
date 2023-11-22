<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVC - Login de Membro</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .custom-form {
            background-color: #000000;
            padding: 5vw;
            border-radius: 3rem;
            margin-top: 10rem;
        }

        .custom-form label {
            color: white;
        }

        .custom-form h2 {
            text-align: center;
            color: white;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    include 'conexao.php';
    ?>
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 custom-form">
                <h2>Login IVC</h2>
                <br />
                <form method="post" action="valida_membro.php" name="logon">
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input name="txtemail" type="email" class="form-control" required id="email">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha :</label>
                        <input name="txtsenha" type="password" class="form-control" required id="senha">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        <span class="glyphicon glyphicon-ok"></span> Entrar
                    </button>
                    <a href="FormCadastro.php" class="btn btn-link btn-block">Ainda não sou cadastrado</a>
            </div>
        </div>
</body>

</html>