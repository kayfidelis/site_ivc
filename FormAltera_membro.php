<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>GRUTA.SB - Alteração de Usuário</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
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

    $id = $_GET['id_membro'];

    include 'conexao.php';

    $consulta = $cn->query("SELECT * FROM tbl_membros WHERE nm_membro='$id'"); 
    $exibe = $consulta->fetch(PDO::FETCH_ASSOC);
    ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 custom-form">
                <h2>Alteração de Membro</h2>
                <form method="post" action="alteraMembro.php?id_membro=<?php echo $id; ?>" name="AlteraMembro" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="txtnome">Nome</label>
                        <input type="text" name="txtnome" value="<?php echo $exibe['nm_membro']; ?>" class="form-control" required id="txtnome">
                    </div>
                    <div class="form-group">
                        <label for="txtemail">Email</label>
                        <input type="email" name="txtemail" value="<?php echo $exibe['email_membro']; ?>" class="form-control" required id="txtemail">
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone :</label>
                        <input name="txttel" type="text" value="<?php echo $exibe['tel_membro']; ?>" class="form-control" required id="telefone" placeholder="Ex: (11) 9090-90909" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}">
                    </div>
                    <br/>
                    <button type="submit" class="btn btn-lg btn-primary"> Alterar Minhas Informações</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>