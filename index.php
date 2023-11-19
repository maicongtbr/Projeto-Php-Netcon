<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css" media="screen" />
    
    <title>Conversor de Quilômetros e Metros</title>

</head>
<body>
    <?php
        //Inicialização das variáveis
        $km = 0;
        $anosLuz = 0;
        $kmToAnosLuz = 0;
        $anosLuzToKm = 0;
        $return;

        // Verifica se o form foi enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(isset($_POST["anosLuz"])){  
                if($_POST["anosLuz"] < 1 || !is_numeric($_POST["anosLuz"])){
                    $return = "Insira um valor válido.";
                }else{
                    $anosLuz = $_POST["anosLuz"];
                    $anosLuzToKm = $anosLuz * 9460730472580.8;
                }
            }elseif(isset($_POST["km"])){
                if($_POST["km"] < 1 || !is_numeric($_POST["km"])){
                    $return = "Insira um valor válido.";
                }else{
                    $km = $_POST["km"];
                    $kmToAnosLuz = $km / 9460730472580.8;
                }
            }
        }
    ?>
    <section class="container">
        <div class="item1">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="km">Digite a quantidade em quilômetros:</label>
                <input type="text" name="km" id="km">

                <input type="submit" value="Converter">

                <?php
                    // Exibe os resultados dentro das caixas correspondentes
                    if(isset($return)){
                        echo "<div class='errorItem'>";
                        echo "<p>$return";
                        echo "</div>";
                    }else{
                        echo "<div class='item2'>";
                        echo "<p>$km Km é igual a $kmToAnosLuz anos luz.</p>";
                        echo "</div>";
                    }
                ?>
            </form>
        </div>
        <div class="item1">
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="anosLuz">Digite a quantidade em anos luz:</label>
                <input type="text" name="anosLuz" id="anosLuz">

                <input type="submit" value="Converter">

                <?php
                    // Exibe os resultados dentro das caixas correspondentes
                    if(isset($return)){
                        echo "<div class='errorItem'>";
                        echo "<p>$return";
                        echo "</div>";
                    }else{
                        echo "<div class='item2'>";
                        echo "<p>$anosLuz anos luz é igual a $anosLuzToKm Kms.</p>";
                        echo "</div>";
                    }
                ?>
            </form>
        </div>
    </section>
</body>
</html>