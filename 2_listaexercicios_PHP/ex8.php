<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 8- 2° Lista de Exercícios PHP</title>
</head>
<body>
    <h1 class="h1exercicios"> <?php echo "Exercício: Número 8";?> </h1>
    <fieldset class="fieldexercicios">
        <h2><?php echo "DADO VIRTUAL";?> </h2>
        <a class="button" href="ex8.php">JOGAR DADO</a>
    </fieldset>

    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <img src="<?php include "funcoes.php"; 
        echo qualFace();?>" alt="" class="imgdado">
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