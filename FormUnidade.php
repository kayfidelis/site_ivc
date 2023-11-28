<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>IVC - Cadastro de Membro</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="jquery-mask.js"></script>

    <style>
        .custom-form {
            background-color: #000000;
            padding: 4vw;
            border-radius: 3rem;
            margin-top: 5%;
            margin-bottom: 5%;
        }

        .custom-form label {
            color: white;
        }

        .custom-form h2 {
            text-align: center;
            color: white;
        }
    </style>

    <script>
        $(document).ready(function() {
            $("#telefone").mask("(00) 0000-00009");
        });
    </script>
</head>

<body>
    <?php
    session_start();
    include 'conexao.php';
    $consultaUnidade = $cn->query("select * from tbl_unidades");
    ?>


    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 custom-form mx-auto">
                <h2>Adicionar Unidade IVC</h2>
                <br />
                <form method="post" action="inserir_membro.php" name="logon">
                    <div class="form-group">
                        <label for="nome">Nome da Unidade :</label>
                        <input name="txtnome" type="text" class="form-control" required id="nome" placeholder="Ex: Vida Com Cristo SP">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input name="txtemail" type="email" class="form-control" required id="email" placeholder="Ex: ivcsaopaulo@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone :</label>
                        <input name="txttel" type="text" class="form-control" required id="telefone" placeholder="Ex: (11) 9090-90909" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço :</label>
                        <input name="txtendereco" type="text" class="form-control" required id="endereco" placeholder="Ex: Rua Santa Anna n3" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
                    </div>
                    <br />
                    <button type="submit" class="btn btn-primary">
                        Cadastrar
                    </button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>