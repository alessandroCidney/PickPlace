<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PickPlace | Gerenciar dados</title>
    <link rel="stylesheet" href="css/adm.css">
</head>
<body>
    <header class="container header">
        <div class="header-items">
            <div class="header-item border header-logo"><a href="index.php">PickPlace</a></div>

            <div class="header-options">
                <div class="header-item border header-link" id="button-add">Adicionar</div>
                <div class="header-item border header-link" id="button-remove">Remover</div>
            </div>
            
        </div>
    </header>

    <section class="section section-one">
        <div class="section-one-text border">
            <h1 class="section-one-item border">Manipule os dados e obtenha informações</h1>
            <h2 class="section-one-item border">Com eficiência e rapidez</h2>
        </div>

        <div class="section-one-image border">
            <img src="resources/light.png"> 
        </div>
    </section>

    <section class="section section-two disabled max-height" id="search-form">
        <form class="search-form active" id="add-form" action="result_add.php" method="post">
            
            <div class='active form-body'>

                <div class='form-item form-title'>
                    <h3>Altere os valores principais</h3>
                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>Número (identificação) do produto</div>
                    <div class='form-col'><input name="kwhmensal" type="number" step="0.01" placeholder="Digite o número do produto"></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>Valor do produto</div>
                    <div class='form-col'><input name="valordosistema" type="number" step="0.01" placeholder="Digite o valor do produto"></div>

                </div>

                <div class='form-item form-title'>
                    <h3>Altere os valores de parcelamento</h3>
                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>12x</div>
                    <div class='form-col'><input name="pdoze" type="number" step="0.01" placeholder="Parcelamento em 12x de..."></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>24x</div>
                    <div class='form-col'><input name="pvinteequatro" type="number" step="0.01" placeholder="Parcelamento em 24x de..."></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>36x</div>
                    <div class='form-col'><input name="ptrintaeseis" type="number" step="0.01" placeholder="Parcelamento em 36x de..."></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>48x</div>
                    <div class='form-col'><input name="pquarentaeoito" type="number" step="0.01" placeholder="Parcelamento em 48x de..."></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>60x</div>
                    <div class='form-col'><input name="psessenta" type="number" step="0.01" placeholder="Parcelamento em 60x de..."></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>72x</div>
                    <div class='form-col'><input name="psetentaedois" type="number" step="0.01" placeholder="Parcelamento em 72x de..."></div>

                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>84x</div>
                    <div class='form-col'><input name="poitentaequatro" type="number" step="0.01" placeholder="Parcelamento em 84x de..."></div>

                </div>

                <div class="form-item form-submit">
                    <input type="submit" value="Inserir valores" class="default-submit">
                </div>
            </div>        
        </form>

        <form class="search-form disabled" id="remove-form" action="result_remove.php" method="post">
            <div class="form-body">
                <div class='form-item form-title'>
                    <h3>Digite o número (identificação) do produto a ser removido</h3>
                </div>

                <div class='form-item border-down'>
                    
                    <div class='form-col'>Número do produto</div>
                    <div class='form-col'><input name="valorkwh" type="number" step="0.01" placeholder="Digite o número do produto"></div>

                </div>

                <div class="form-item form-submit remove-submit">
                    <input type="submit" value="Remover" class="default-submit">
                </div>
            </div>
        </form>
    </section>

    <footer class="container footer">
        <div class="footer-row">
            Consulte os valores armazenados
        </div>
        <div class="footer-row">
            PickPlace
        </div>
    </footer>

    <script src="js/main.js"></script>
</body>
</html>