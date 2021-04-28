<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração | Power</title>
    <link rel="stylesheet" href="css/adm.css">
</head>
<body>
    <header class="container header">
        <div class="header-items">
            <div class="header-item border header-logo"><a href="adm.php"><img src="resources/logo.png"></a></div>
            <div class="header-item border header-link"><a href="adm.php">Voltar</a></div>
        </div>
    </header>

    <section class="section section-one">
        <div class="section-one-text border">
            <h1 class="section-one-item border">
                <?php

                    require "php/connection.php";

                    $database = new Database();

                    $kwh = $_POST["valorkwh"];

                    $status = $database->data_remove($kwh);

                    if(!$status) {
                        echo("Não foi possível realizar a operação.");
                    } else {
                        echo("A operação foi bem sucedida!");
                    }

                ?>
            </h1>

            <h2 class="section-one-item border"><a href="adm.php" class="white">Voltar à página inicial</a></h2>
        </div>

    </section>

    <footer class="container footer">
        <div class="footer-row">
            Consulte os valores associados ao sistema que deseja
        </div>
        <div class="footer-row">
            Power | Energia Solar
        </div>
    </footer>
</body>
</html>