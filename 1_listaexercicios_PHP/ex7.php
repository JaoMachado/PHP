<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 7- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 7";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Calculadora de salário mensal";?> </h2>
            <label for="horastrabalhadas">Digite as horas trabalhadas:</label>
            <input type="number" name="horastrabalhadas" id="horastrabalhadas" class="campoescrita">
            <br>
            <label for="salariohora">Salário por horas(R$): </label>
            <input type="my_field" name="salariohora" id="salariohora" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
       </fieldset>
    </form>
   <?php
        include "funcoes.php";
        $resultado = calculaHorasTrablhadasMes($_POST["salariohora"], $_POST["horastrabalhadas"]);
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> <?php echo $resultado;?> </h3>
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


