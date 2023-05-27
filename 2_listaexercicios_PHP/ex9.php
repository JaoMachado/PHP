<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 9- 2° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 9";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Qual mês é equivalente ao número?";?> </h2>
            <label for="digite">Digite o numero do mês:</label>
            <input type="number" name="mes" id="mes" class="campoescrita"><br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>

    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> 
            <?php 
                include "funcoes.php";        
                lerNumeroInteiro($_POST["mes"]);
            ?> 
        </h3>
    </fieldset>

    <div>
        <a class="button"  href="ex8.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button"  href="ex10.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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