<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style type="text/css">
        #logon {
            position: relative;
            top: 1.1em;
        }

        #adm {
            position: relative;
            top: -0.4rem;
        }

        .navbar {
            margin-bottom: 0;
            padding: 1rem;
            border-radius: 0;
        }
    </style>
    <title>Vida Com Cristo</title>
</head>

<body>
    <?php
    session_start();
    include 'conexao.php';
    include 'navbar.php';
    ?>
</body>

</html>