<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 9- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 9";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Calculadora do valor final do abastecimento";?> </h2>
            <label for="digite">Para saber quanto paga no combustivel, DIGITE:</label>
            <br>
            <label for="quantidade_litros">Quantidade de Litros: </label>    
            <input type= "my_field" name="quantidade_litros" id="quantidade_litros" class="campoescrita">
            <br>
            <label for="tipo_combustivel"> Tipo de Combustivel: </label> 
            <select name="tipo_combustivel" id="tipo_combustivel" class="campopcoes">
            <option value="alcool">Álcool</option>
            <option value="gasolina">Gasolina</option>
            </select>
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <?php   
        include "funcoes.php";        
        $resultadofinal = calculaValorPagoClientes ($_POST["quantidade_litros"] ,$_POST["tipo_combustivel"]);
        
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> <?php echo $resultadofinal;?> </h3>
    </fieldset>
    <div >
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