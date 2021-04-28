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

                        $kwh = $_POST["kwhmensal"];

                        $system = $_POST["valordosistema"];

                        $v1 = $_POST["pdoze"];

                        $v2 = $_POST["pvinteequatro"];

                        $v3 = $_POST["ptrintaeseis"];

                        $v4 = $_POST["pquarentaeoito"];

                        $v5 = $_POST["psessenta"];

                        $v6 = $_POST["psetentaedois"];

                        $v7 = $_POST["poitentaequatro"];

                        $status = $database->data_insert($kwh, $system, $v1, $v2, $v3, $v4, $v5, $v6, $v7);

                        if (!$status) {
                            echo("Não foi possível finalizar a operação");
                        } else {
                            echo("A operação foi bem sucedida");
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