<?php
    // Exercício 1:
    function verificaValores(){
        $array= array();
        for($i = 0; $i < 15; $i++){
            $sorteio = random_int(1, 100);
            $array[] = $sorteio;
            if($sorteio % 2 == 0){
                echo "{$array[$i]} -> NÚMERO PAR <br>";
            }else{
                echo "{$array[$i]} -> NÚMERO ÍMPAR <br>";
            }
        } 
    }

    // Exercício 2:
    function contadorNumeros(){
        $negativos = 0;
        $positivos = 0;
        $impares = 0;
        $pares = 0;
        $neutros = 0;
        $array= array();
        for($i = 0; $i < 10; $i++){
            $sorteio = random_int(-100, 100);
            $array[] = $sorteio;
            if($array[$i] % 2 == 0){
                $pares++;
            }else{
                $impares++;
            }
            if($array[$i] == 0){
                $neutros++;
            }else if($array[$i] < 0){
                $negativos++;
            }else{
                $positivos++;
            }
            echo "SORTEADO: {$array[$i]} <br>";
        }
        echo "<br>Quantidade de Números Negativos: {$negativos} <br>Quantidade de Números Positivos: {$positivos} <br>
        Quantidade de Números Pares: {$pares} <br>Quantidade de Números Ímpares: {$impares} 
        <br>Quantidade de Números Neutros: {$neutros}";
    }

    // Exercício 3:
    function reversorOrdemNumeros(){
        $array= array();
        for($i = 0; $i < 10; $i++){
            $sorteio = random_int(-100, 100);
            $array[] = $sorteio;
            echo "SORTEADO: {$array[$i]} <br>";
        }
        echo "<br>Ordem Reversa dos Números Sorteados:<br>";
        for($i = 9; $i >= 0; $i--){
            echo "{$array[$i]} <br>";
        }
    }

    // Exercício 4:
    function cadastroPessoas(){
        $cadastro = array (
            "João Marcos Figueiredo" => array (
                "cidade" => "Poços de Caldas",
                "idade" => "17 anos",
                "sexo" => "Masculino"
            ) ,
            "Ketlen Arruda" => array (
                "cidade" => "Santos",
                "idade" => "22 anos",
                "sexo" => "Feminino"
            ) ,
            "Rodinei Pinto" => array (
                "cidade" => "Botelhos",
                "idade" => "15 anos",
                "sexo" => "Masculino"
            ) ,
            "Rodrygo Silva de Goes" => array (
                "cidade" => "Santos",
                "idade" => "19 anos",
                "sexo" => "Masculino"
            ) ,
            "Valéria Garcia" => array (
                "cidade" => "Poços de Caldas",
                "idade" => "17 anos",
                "sexo" => "Feminino"
            ) ,
            "André Pereira Brito" => array (
                "cidade" => "Botelhos",
                "idade" => "20 anos",
                "sexo" => "Masculino"
            ) ,
            "Maria Luiza Magalhães" => array (
                "cidade" => "Rio de Janeiro",
                "idade" => "18 anos",
                "sexo" => "Feminino"
            ) ,
            "Marcos Leonardo Santos Almeida" => array (
                "cidade" => "Santos",
                "idade" => "17 anos",
                "sexo" => "Masculino"
            ) ,
            "Clotilde Silva" => array (
                "cidade" => "Eloi Mendes",
                "idade" => "35 anos",
                "sexo" => "Feminino"
            ) ,
            "Neymar da Silva Santos Júnior" => array (
                "cidade" => "Santos",
                "idade" => "32 anos",
                "sexo" => "Masculino"
            )
        );
        echo "<br>LISTA DE CADASTRADOS: <br>";
        foreach ($cadastro as $chave => $pessoa ) {
            echo "Nome: " . $chave. "<br>Idade: " . $pessoa['idade'] . "<br><br>";
        }
        echo "<br>PESSOAS RESIDENTES DA CIDADE DE SANTOS-SP: <br>";
        foreach ($cadastro as $chave => $pessoa ) {
            if($pessoa['cidade'] == "Santos"){
                echo  $chave . "<br>";
            }
        }
        echo "<br><br>PESSOAS COM MAIS DE 18 ANOS: <br>";
        foreach ($cadastro as $chave => $pessoa ) {
            if($pessoa['idade'] >18){
                echo $chave . "<br>";
            }
        }
        echo "<br><br>NÚMERO DE PESSOAS DO SEXO MASCULINO: <br>";
        $masculinos=0;
        foreach ($cadastro as $chave => $pessoa ) {
            if($pessoa['sexo'] == "Masculino"){
                $masculinos++;
            }
        }
        echo $masculinos. "<br>";
    }
    
    // Exercício 5:
    function sequenciaFibonacci(){
        $ultimo=1;
        $penultimo=0;
        echo "Termo 1: 0<br> Termo 2: 1<br>";
        for($i=1; $i<=148; $i++){
            $atual = $ultimo + $penultimo;
            echo "Termo " . ($i+2) . ": {$atual} <br />";
            $penultimo = $ultimo;
            $ultimo = $atual;
        }   
    }

    // Exercício 6:
    function verificarPrimo($num){
        $divisores = 0;
        if(isset($num) && !empty($num) && ($num> 0) || ($num== "0") && ($num != NULL)){
            for($count=2; $count<$num; $count++){
                if($num % $count == 0){
                    $divisores++;
                }
            }
            if($num == 1){
                echo "NÃO É PRIMO!";
            }else if($divisores){
                echo "NÃO É PRIMO!!";
            }else{
                echo "É PRIMO!!";
            }    
        }else{
            echo "Digite um número válido!!";
        }
    }
    

    // Exercício 7:
    function combustivelVantajoso($gasolina, $etanol){
        if(($gasolina != NULL) && ($etanol != NULL)){
            $lim = 0.7* $gasolina;
            if($etanol <= $lim){
                $source = "images/combustivel/etanol.png";
            }else{
                $source = "images/combustivel/gasolina.png";
            }
        }else{
            $source = "images/combustivel/neutro.png";
        }
        return $source;
    }

    // Exercício 8:
    function qualFace(){
        $sorteio = random_int(1, 6);
        // $source = "images/dado/face" . $sorteio . ".png"; Modo automatizado sem precisar utilizar o swith-case
        switch($sorteio){
            case 1: 
                $source = "images/dado/face1.png";
                break;
            case 2: 
                $source = "images/dado/face2.png";
                break;
            case 3: 
                $source = "images/dado/face3.png";
                break;
            case 4: 
                $source = "images/dado/face4.png";
                break;
            case 5: 
                $source = "images/dado/face5.png";
                break;
            case 6: 
                $source = "images/dado/face6.png";
                break;
            }        
        return $source;
    }

    // Exercício 9:
    function lerNumeroInteiro($mes){
        if(isset($mes) && !empty($mes) && ($mes > 0) || ($mes == "0")){
            $mes = filter_var($mes, FILTER_SANITIZE_NUMBER_INT);
            switch($mes){
                case 1: 
                    echo "Número Digitado: {$mes}<br> JANEIRO";
                    break;
                case 2: 
                    echo "Número Digitado: {$mes}<br> FEVEREIRO";
                    break;
                case 3: 
                    echo "Número Digitado: {$mes}<br> MARÇO";
                    break;
                case 4: 
                    echo "Número Digitado: {$mes}<br> ABRIL";
                    break;
                case 5: 
                    echo "Número Digitado: {$mes}<br> MAIO";
                    break;
                case 6: 
                    echo "Número Digitado: {$mes}<br> JUNHO";
                    break;
                case 7: 
                    echo "Número Digitado: {$mes}<br> JULHO";
                    break;
                case 8: 
                    echo "Número Digitado: {$mes}<br> AGOSTO";
                    break;
                case 9: 
                    echo "Número Digitado: {$mes}<br> SETEMBRO";
                    break;
                case 10: 
                    echo "Número Digitado: {$mes}<br> OUTUBRO";
                    break;
                case 11: 
                    echo "Número Digitado: {$mes}<br> NOVEMBRO";
                    break;
                case 12: 
                    echo "Número Digitado: {$mes}<br> DEZEMBRO";
                    break;

                default: 
                    echo "Mês inexistente";
                    break;
            }
        }else{
            echo "Digite um valor para realizar a pesquisa!!";
        }    
    }

    // Exercício 10:
    function datas($data){
        if(isset($data) && !empty($data) && ($data > 0) || ($data == "0")){
            $timestamp = strtotime($data);
            $dia = date('d', $timestamp);
            $mes = date('m', $timestamp);
            $ano = date('Y' , $timestamp);

            switch($mes){
                case 1: 
                    $mes = "Janeiro";
                    break;
                case 2: 
                    $mes = "Fevereiro";
                    break;
                case 3: 
                    $mes = "Março";
                    break;
                case 4: 
                    $mes = "Abril";
                    break;
                case 5: 
                    $mes = "Maio";
                    break;
                case 6: 
                    $mes = "Junho";
                    break;
                case 7: 
                    $mes = "Julho";
                    break;
                case 8: 
                    $mes = "Agosto";
                    break;
                case 9: 
                    $mes = "Setembro";
                    break;
                case 10: 
                    $mes = "Outubro";
                    break;
                case 11: 
                    $mes = "Novembro";
                    break;
                case 12: 
                    $mes = "Dezembro";
                    break;
            }
            echo $dia . " de " . $mes . " de " . $ano;
        }else{
            echo "Digite um valor!!";
        }
    }