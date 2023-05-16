<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 1- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1 class="h1exercicios"> <?php echo "Exercício: Número 1";?> </h1>
    <form method="POST">
        <fieldset>
            <h2 > <?php echo "Verificador de Valores";?> </h2>
            <label for="valor">DIGITE O VALOR a ser verificado:</label>
            <input type="number" name="valor" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <?php
        include "funcoes.php";
        $resultado = verificaValores($_POST["valor"]);
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> <?php echo $resultado;?> </h3>
    </fieldset>
    <div>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button"  href="ex2.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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