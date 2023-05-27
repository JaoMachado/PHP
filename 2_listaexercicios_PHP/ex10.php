<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 10- 2° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 10";?> </h1>
    <form method="POST">
        <fieldset class="fieldexercicios">
            <h2><?php echo "Datas";?> </h2>
            <label for="digitar">Insira a data: </label>
            <input type="date" name = "data" id="data">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> 
            <?php           
                include "funcoes.php";
                datas($_POST["data"]);
            ?> 
        </h3>
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