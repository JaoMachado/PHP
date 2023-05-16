<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 10- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 10";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Verificador de aposentadoria";?> </h2>
            <label for="digitar">Para saber se requer aposentadoria, DIGITE:</label>
            <br>
            <label for="ano_nascimento"> Ano de Nascimento: </label>    
            <input type= "number" name="ano_nascimento" id="ano_nascimento" min="1922" class="campoescrita">
            <br>
            <label for="ano_ingresso"> Ano de ingresso de impressa: </label> 
            <input type="number" name="ano_ingresso" id="ano_ingresso" min="1950" class="campoescrita"> 
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <?php           
        include "funcoes.php";
        $resultadofinal = verificadorAposentadoria($_POST["ano_nascimento"], $_POST["ano_ingresso"]);
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> <?php echo $resultadofinal;?> </h3>
    </fieldset>
    <div>
        <a class="button"  href="ex9.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button"  href="ex11.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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