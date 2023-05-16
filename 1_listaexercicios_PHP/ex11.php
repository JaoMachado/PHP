<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="css/style.css">
<head>
    <meta charset="UTF-8">
    <title>Número 11- 1° Lista de Exercícios PHP</title>
</head>
<body>
    <h1  class="h1exercicios"> <?php echo "Exercício: Número 11";?> </h1>
    <form method="POST">
        <fieldset>
            <h2><?php echo "Faça seu Cadastro";?> </h2>
            <label for="digite">Para saber se requer aposentadoria, DIGITE:</label>
            <br>
            <label for="nome"> Nome: </label>    
            <input type= "text" name="nome" id="nome" class="campoescrita">
            <br>
            <label for="email"> E-mail: </label> 
            <input type="email" name="email" id="email" class="campoescrita"> 
            <br>
            <label for="cpf"> CPF:</label>
            <input type="text" name="cpf" id="cpf" class="campoescrita">
            <br>
            <label for="idade"> Idade(anos): </label>
            <input type="number" name="idade" id="idade" min="1" class="campoescrita">
            <br>
            <input type="submit" class="enviar">
        </fieldset>
    </form>
    <?php     
        include "funcoes.php";
        $resultadofinal = facaSeuCadastro($_POST["nome"], $_POST["email"], $_POST["cpf"], $_POST["idade"]);
    ?>
    <h1 > <?php echo "RESULTADO:";?> </h1>
    <fieldset>
        <h3> <?php echo $resultadofinal;?> </h3>
    </fieldset>
    <br><br>
    <fieldset>
        <h1>Arquitetura Cliente- Servidor</h1>
        <img src="images/arquitetura_cliente-servidor.jpeg" alt="Imagem da arquitetura cliente-servidor.">
        <p class="pclienteservidor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Primeiro, o cliente envia suas requisições ou informações a serem processadas ao servidor. Logo após, esses dados se encontrarão no chamado "back-end", uma parte da aplicação que não pode ser manipulada pelo usuário. Esses dados serão passados pelo servidor para as aplicações(linguagem de programação), que passará os dados ao banco de dados. Para dar a resposta ao cliente, o servidor busca dados no banco de dados, que ao passar pelas aplicacões, esses dados podem ou não serem manipulados. Após as customizações, as aplicações oferecem a página customizada e com os dados ao servidor, que então a devolve para o cliente, exibindo-a no "front-end", parte da aplicação que pode ser manipulada pelo usuário, ou, a página HTML.</p>
    </fieldset>
    <div >
        <a class="button"  href="ex10.php"><?php echo "EXERCÍCIO ANTERIOR";?> </a>
        <a class="button"  href="index.html"><?php echo "INÍCIO";?> </a>
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