<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 7- 2° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 7";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "CALCULE QUAL COMBUSTÍVEL É MAIS VANTAJOSO";?> </h2>
            <label for="gasolina">Preço do litro da Gasolina(R$)</label><br>
            <input type="number" name="gasolina" step="0.001" id="gasolina" min="1" class="campoescrita"><br>
            <label for="etanol">Preço do litro do Etanol(R$)</label><br>
            <input type="number" name="etanol" step="0.001" id="etanol" min="1" class="campoescrita"><br>
            <input type="submit" class="enviar">
       </fieldset>
    </form> 

    <h1> <?php echo "RESULTADO"?> </h1>
    <fieldset>
        <img src= "<?php include 'funcoes.php';
        echo combustivelVantajoso ($_POST['gasolina'],  $_POST['etanol']);?>" alt="Imagem de um marcador indicando 
        qual combustível é mais vantajoso" class= "images">
    </fieldset>

    <div>
        <a class="button"  href="ex6.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button"  href="ex8.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
    </div>
    
    <div class="creditos">
        <fieldset>
            <h2>Criadores:</h2>
            <h3>André Pereira Brito</h3>
            <h3>João Pedro Machado Silva</h3> 
        </fieldset>
    </div>
</body>
</html>


