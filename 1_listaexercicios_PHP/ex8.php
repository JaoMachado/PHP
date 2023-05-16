<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 8- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 8";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Calculadora de salário com comissão";?> </h2>
            <label for="numero">Para obter o salário atual, DIGITE:</label>
            <br>
            <label>Salario fixo(R$): </label>    
            <input type= "my_field" name="salario" id="salario" class="campoescrita">
            <br>
            <label>Valor das vendas(R$): </label> 
            <input type= "my_field" name="vendas" id="vendas" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <?php    
        include "funcoes.php";       
         $resultadofinal = calculaValoresVendas($_POST["salario"], $_POST["vendas"]);     
        
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> <?php echo $resultadofinal;?> </h3>
    </fieldset>
    <div>
        <a class="button"  href="ex7.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
        <a class="button"  href="ex9.php"><?php echo "PRÓXIMO EXERCÍCIO";?> </a>
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