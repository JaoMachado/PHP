<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 4- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 4";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Calculadora de custo final do consumidor";?> </h2>
            <label for="custofabrica">Digite o custo de fábrica do veículo(R$): </label>    
            <input type= "my_field" name="custofabrica" id="custofabrica" min="0" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <?php
        include "funcoes.php";
        $resultado = calculaCustoFinal($_POST["custofabrica"]);
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>    
    <fieldset>
        <h3> <?php echo $resultado;?>  </h3>
    </fieldset>
    <div>
        <a class="button"  href="ex3.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button"  href="ex5.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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