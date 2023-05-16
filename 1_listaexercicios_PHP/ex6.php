<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 6- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 6";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Caculadora de Média Aritmética";?> </h2>
            <label for="numero">Para obter sua média aritmética, DIGITE:</label>
            <br>
            <label for="nota1">Nota 1: </label>    
            <input type= "my_field" name="nota1" id="nota1" class="campoescrita">
            <br>
            <label for="nota2">Nota 2: </label> 
            <input type= "my_field" name="nota2" id="nota2" class="campoescrita">
            <br>
            <label for="nota3">Nota 3: </label>  
            <input type= "my_field" name="nota3" id="nota3" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <?php
        include "funcoes.php";
        $resultado = calculaMediaArtimetica($_POST["nota1"], $_POST["nota2"], $_POST["nota3"]);
    ?>
    <fieldset>
        <h3> <?php echo $resultado;?> </h3>
    </fieldset>
    <div>
        <a class="button" href="ex5.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button" href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button" href="ex7.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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