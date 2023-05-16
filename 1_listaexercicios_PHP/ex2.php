<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 2- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1 class="h1exercicios"> <?php echo "Exercício: Número 2";?> </h1>
    <form method="GET">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Gerador de Tabuadas";?> </h2>
            <label for="numero">Para obter a tabuada, DIGITE O NÚMERO:</label>
            <input type="number" name="numero" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <?php
            include "funcoes.php";
            geraTabuadas($_GET["numero"]);
        ?>
    </fieldset>
    <div>
        <a class="button" href="ex1.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button" href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button" href="ex3.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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

