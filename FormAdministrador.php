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
                <h2>Cadastro Administardor</h2>
                <br />
                <form method="post" action="inserir_administrador.php" name="logon">
                    <div class="form-group">
                        <label for="nome">Nome Completo :</label>
                        <input name="txtnome" type="text" class="form-control" required id="nome" placeholder="Ex: José da Silva">
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail :</label>
                        <input name="txtemail" type="email" class="form-control" required id="email" placeholder="Ex: josesilva@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone :</label>
                        <input name="txttel" type="text" class="form-control" required id="telefone" placeholder="Ex: (11) 9090-90909" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
                    </div>
                    <div class="form-group">
                        <label for="txtunidade">Escolha sua unidade</label>
                        <select class="form-control" name="txtunidade">
                            <option value="">Selecione</option>
                            <?php while ($Lista = $consultaUnidade->fetch(PDO::FETCH_ASSOC)) { ?>
                                <option value="<?php echo $Lista['id_unidade']; ?>"><?php echo $Lista['nm_unidade']; ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <br/>
                    <div>
                        <label for="data">Data de Nascimento:</label>
                        <input type="date" id="data" name="data" required placeholder="Ex: 25/03/2000">
                    </div>
                    <br/>
                    <div class="form-group">
                        <label for="senha">Senha :</label>
                        <input name="txtsenha" type="password" class="form-control" required id="senha" placeholder="Ex: senha@123">
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