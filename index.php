<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PickPlace | Consulta de valores</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <header class="container header">
        <div class="header-items">
            <div class="header-item border header-logo"><a href="#search-form">PickPlace</div>
            <div class="header-item border header-link"><a href="place.php">Gerenciar</a></div>
        </div>
    </header>

    <section class="section section-one">
        <div class="section-one-text border">
            <h1 class="section-one-item border">Consulte os valores adicionados</h1>
            <h2 class="section-one-item border">Com eficiência e rapidez</h2>
        </div>

        <div class="section-one-image border">
            <img src="resources/light.png"> 
        </div>
    </section>

    <section class="section section-two" id="search-form">
        <div class="search-form">
            
            <div class="form-initial">

                <div class="form-initial-item">
                    <h3>Pesquisa</h3>
                </div>

                
                <form class="form-initial-item form-initial-item-two" action="index.php" method="get">
                    <input name="monthKwh" type="number" step="0.01" placeholder="Digite a identificação do produto" class="search-input" required>
                    <input name="submitKwh" type="submit" value="Buscar" class="search-submit">
                </form>
                
            </div>

            <?php 

                    #É importante realizar a conexão e utilizar a função de listagem

                    require "php/connection.php";

                    $databaseConnection = new Database();

                    #E incluir a função com outros métodos

                    require "php/methods.php";

                    $methods = new Methods();

                    #É necessário testar se algum valor foi informado

                    $kwhSearch = isset($_GET["monthKwh"])? $_GET["monthKwh"]: 0;

                    if ($kwhSearch == "") {
                        $kwhSearch = 0;
                    }

                    #É importante chamar a função com o código abaixo

                    $rowData = $databaseConnection->data_list($kwhSearch);

                    #Mostrando as informações encontradas

                    if ($rowData) {
                        foreach ($rowData as $key => $value) {
                            echo("
                            <div class='active form-body'>

                            <div class='form-item form-title'>
                                <h3>Valores</h3>
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>Número do produto</div>
                                <div class='form-col'>".$value["kwh"]."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>Valor do produto</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["system_value"])."</div>
            
                            </div>
            
                            <div class='form-item form-title'>
                                <h3>Parcelamento</h3>
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>12x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_one"])."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>24x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_two"])."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>32x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_three"])."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>48x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_four"])."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>60x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_five"])."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>72x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_six"])."</div>
            
                            </div>
            
                            <div class='form-item border-down'>
                                
                                <div class='form-col'>84x</div>
                                <div class='form-col'>R$ ".$methods->Formatation($value["value_seven"])."</div>
            
                            </div>
                        </div>
                            ");
                        }
                    } else {
                        echo("
                        <div class='active form-body'>

                        <div class='form-item form-title'>
                            <h3>Valores</h3>
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>Número do produto</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>Valor do produto</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item form-title'>
                            <h3>Parcelamento</h3>
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>12x</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>24x</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>32x</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>48x</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>60x</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>72x</div>
                            <div class='form-col'>-</div>
        
                        </div>
        
                        <div class='form-item border-down'>
                            
                            <div class='form-col'>84x</div>
                            <div class='form-col'>-</div>
        
                        </div>
                    </div>
                        ");
                    }
                ?>
            
        </div>
    </section>

    <footer class="container footer">
        <div class="footer-row">
            Consulte os valores armazenados
        </div>
        <div class="footer-row">
            PickPlace
        </div>
    </footer>
</body>
</html>