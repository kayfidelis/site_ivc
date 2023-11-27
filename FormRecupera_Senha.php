<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IVC - Recuperação de Senha</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .custom-form {
            background-color: #000000;
            padding: 4vw;
            border-radius: 3rem;
            margin-top: 10rem;
        }

        .custom-form label {
            color: white;
        }

        .custom-form a{
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
                <h2>Recuperação de Senha</h2>
                <br />
                <form method="post" action="alteraSenha.php" name="RecuperarSenha">
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input name="txtemail" type="email" class="form-control" required id="email" placeholder="Digite o email que você cadastrou">
                    </div>
                    <div class="form-group">
                        <label for="senha">Nova Senha :</label>
                        <input name="txtsenha" type="password" class="form-control" required id="senha" placeholder="Digite sua nova senha">
                    </div>
                    <div class="form-group">
                        <label for="senha">Confirme a Senha :</label>
                        <input name="txtconfirmasenha" type="password" class="form-control" required id="senha" placeholder="Repita a senha digitada acima">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                     Trocar Senha
                    </button>
            </div>
        </div>
</body>

</html>