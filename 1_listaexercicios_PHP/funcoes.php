<?php
    // Exercício 1:
    function verificaValores($valor){
        if(isset($valor) && !empty($valor) || ($valor=="0") ){
            if($valor!= NULL){
                if($valor > 0){
                    $resultado = "O valor digitado foi: " . $valor . "<br> Valor Positivo";
                }else if($valor < 0){
                    $resultado = "O valor digitado foi: " . $valor . "<br> Valor Negativo";
                }else{
                    $resultado = "O valor digitado foi: " . $valor . "<br> Valor Igual a Zero";
                }
            } 
        }else{
            $resultado = "Por favor, digite um número"; 
        }     
    return $resultado;
    }

    // Exercício 2:
    function geraTabuadas($numero){
        if(isset ($numero) && !empty ($numero) || ($numero == "0")){
            for($i=0; $i<=10; $i++){
                $resultado = $numero * $i;
                echo $numero . "x" . $i . "= " . $resultado . "<br>";
            }
        }else{
            echo "Por favor, digite um número";
        } 
    }

    // Exercício 3:
    function calculaIMC($nome, $peso, $altura){
        if((isset ($peso) && !empty ($peso) && ($peso > 0) || ($peso == "0")) && (isset ($altura) && !empty ($altura) && ($altura > 0) || ($altura == "0"))){
            $imc = $peso/($altura*$altura);
            $pesomin = 18.5 *($altura*$altura);            
            $pesomax = 24.9 *($altura*$altura);
            $pesomed = ($pesomin+$pesomax)/2;
            $imc = number_format($imc, 2, '.', '');
            $pesomin = number_format($pesomin, 2, '.', '');
            $pesomax = number_format($pesomax, 2, '.', '');
            $pesomed = number_format($pesomed, 2, '.', '');
            if(($peso!= NULL) && ($altura!= NULL)){
                if($imc<18.5){
                    $resultado = $nome . ", seu IMC é: " . $imc . "<br>Você está abaixo do peso ideal!" . "<br>O peso mínimo para sua altura é: " . $pesomin 
                    . " quilos" . "<br>O peso médio para sua altura é: " . $pesomed . " quilos" . "<br>O peso máximo para sua altura é: " . $pesomax . " quilos";
                }else if(($imc >=18.5) && ($imc<25)){
                    $resultado = $nome . ", seu IMC é: " . $imc . "<br>Parabéns – Você está em seu peso normal!" . "<br>O peso mínimo para sua altura é: " . $pesomin 
                    . " quilos" . "<br>O peso médio para sua altura é: " . $pesomed . " quilos" . "<br>O peso máximo para sua altura é: " . $pesomax . " quilos";
                }else if(($imc >=25) && ($imc<30)){
                    $resultado = $nome . ", seu IMC é: " . $imc . "<br>Você está acima de seu peso (sobrepeso)!" . "<br>O peso mínimo para sua altura é: " . $pesomin 
                    . " quilos" . "<br>O peso médio para sua altura é: " . $pesomed . " quilos" . "<br>O peso máximo para sua altura é: " . $pesomax . " quilos";
                }else if(($imc >=30) && ($imc<35)){
                    $resultado = $nome . ", seu IMC é: " . $imc . "<br>Obesidade grau I" . "<br>O peso mínimo para sua altura é: " . $pesomin 
                    . " quilos" . "<br>O peso médio para sua altura é: " . $pesomed . " quilos" . "<br>O peso máximo para sua altura é: " . $pesomax . " quilos";
                }else if(($imc >=35) && ($imc<40)){
                    $resultado = $nome . ", seu IMC é: " . $imc . "<br>Obesidade grau II" . "<br>O peso mínimo para sua altura é: " . $pesomin 
                    . " quilos" . "<br>O peso médio para sua altura é: " . $pesomed . " quilos" . "<br>O peso máximo para sua altura é: " . $pesomax . "quilos";
                }else if($imc >=40){
                    $resultado = $nome . ", seu IMC é: " . $imc . "<br>Obesidade grau III" . "<br>O peso mínimo para sua altura é: " . $pesomin 
                    . " quilos" . "<br>O peso médio para sua altura é: " . $pesomed . " quilos" . "<br>O peso máximo para sua altura é: " . $pesomax . "quilos";
                }
            }
        }else{
            $resultado = "Por favor, digite seus dados!! <br>Digite dados válidos!!";
        }
    return $resultado;
    }

    // Exercício 4:
    function calculaCustoFinal($custofabrica){
        if(isset ($custofabrica) && !empty ($custofabrica) && ($custofabrica > 0) || ($custofabrica == "0") && $custofabrica!= NULL){
            $percentual = $custofabrica*(28/100);
            $imposto = $custofabrica*(45/100);
            $custofinal = $custofabrica+($percentual + $imposto);
            $resultado = "O valor do percentual do distribuidor é: R$" . $percentual . "<br>" . "O valor do imposto cobrado é: R$" 
            . $imposto . "<br>" . "O custo final do veículo é: R$" . $custofinal;
        }else{
            $resultado = "Por favor, digite o custo de fábrica do veículo!! <br>Digite um custo válido!!"; 
        }
    return $resultado;
    }
    
    // Exercício 5:
    function calculaReajuste($salario, $percentual){
        if(isset ($salario) && !empty ($salario) && ($salario > 0) || ($salario == "0") && ($salario!= NULL)){
            $reajuste = $salario*($percentual/100);
            $salarionovo = $salario + $reajuste;
            $resultado = "O valor do reajuste foi de R$" . $reajuste . "<br> O valor do salário reajustado é de R$" . $salarionovo;
        }else{    
            $resultado = "Por favor, digite os valores!! <br>Digite valores válidos!!";
        }
    return $resultado;
    }

    // Exercício 6:
    function calculaMediaArtimetica($nota1, $nota2, $nota3){
        if(isset($nota1) && !empty($nota1) && ($nota1 > 0) && ($nota2 > 0) && ($nota3 > 0)  || ($nota1 == "0") && ($nota1!= NULL)){
            $media = ($nota1 + $nota2 + $nota3) /3;
            $media = number_format($media, 2, '.', '');
            if($media < 6) {
                $situacao= "Reprovado! <br>";
            }
            else  if($media >= 6) {
                $situacao= "Aprovado! <br>"; 
            }
            $resultado= $situacao . "A média aritmética é: {$media} <br>";
        }else{
            $resultado = "Por favor, digite os valores das notas!! <br>Digite valores válidos!!";
        }
    return $resultado;
    }

    // Exercício 7:
    function calculaHorasTrablhadasMes($salariohora, $horastrabalhadas){
        if(isset($horastrabalhadas) && !empty($horastrabalhadas) && ($horastrabalhadas > 0) && ($salariohora > 0)  || ($horastrabalhadas == "0") && ($horastrabalhadas!= NULL)){
            if($horastrabalhadas <= (40 * 4)){
                $salariototal = $horastrabalhadas * $salariohora;
            }else{
                $horasnormais =  40 * 4 * $salariohora;
                $horasadicionais = ($horastrabalhadas -(40 * 4)) * ($salariohora * 1.5);
                $salariototal = $horasnormais + $horasadicionais;
            }
            $resultado= "Horas trabalhadas: {$horastrabalhadas} <br>Salário por hora: R$ {$salariohora} <br>O sálario total é de R$ {$salariototal} !";
        }else{
            $resultado = "Por favor, digite as horas trabalhadas!! <br>Digite valores válidos!!";
        }
    return $resultado;  
    }

    // Exercício 8:
    function calculaValoresVendas($salario, $vendas){
        if(isset($salario) && !empty($salario) && ($salario > 0) && ($vendas > 0)  || ($salario == "0") && ($salario!= NULL)){
            if($vendas > 1500) {
                $resultado= 1500 * 0.03 + ($vendas - 1500) * 0.05;
            }else{
                $resultado = $vendas * 0.03;
            }
            $resultadofinal = "O salário atual é de R$" . ($resultado + $salario);
        }else{
            $resultadofinal = "Por favor, digite o seu salario e suas vendas!! <br>Digite valores válidos!!";
        }
    return $resultadofinal;
    }

    // Exercício 9:
    function calculaValorPagoClientes($quantidade_litros, $tipo_combustivel){
        if(isset($quantidade_litros) && !empty($quantidade_litros) && ($quantidade_litros > 0) || ($quantidade_litros == "0") && ($quantidade_litros!= NULL)){
            if($tipo_combustivel == 'alcool'){
                if($quantidade_litros <= 20){
                    $resultadofinal = "O valor pago é de R$" . (2.90 * $quantidade_litros * 0.97);
                }else{
                    $resultadofinal = "O valor pago é de R$" . (2.90 * $quantidade_litros * 0.95);
                }
            }else if($tipo_combustivel == "gasolina"){
                if($quantidade_litros <= 20){
                    $resultadofinal = "O valor pago é de R$" . (3.30 * $quantidade_litros * 0.96);
                }else{
                    $resultadofinal = "O valor pago é de R$" . (3.30 * $quantidade_litros * 0.94    );
                }
            }    
        }else{
            $resultadofinal = "Por favor, digite a quantidade de combustivel!! <br>Digite uma quantidade válida!! ";
        }
    return $resultadofinal;
    }

    // Exercício 10:
    function verificadorAposentadoria($ano_nascimento, $ano_ingresso){
        if(isset($ano_ingresso) && !empty($ano_ingresso) || ($ano_ingresso == "0") && ($ano_ingresso!= NULL)){
            $ano_atual= 2022;
            $idade = $ano_atual - $ano_nascimento;
            $tempotrabalho = $ano_atual - $ano_ingresso;
            if(($idade >= 65) or ($tempotrabalho >= 30) or ($idade >= 60 && $ano_ingresso >= 25)){
                $resultadofinal = "A idade do funcionário é: {$idade} anos. <br>O tempo de trabalho do funcionário é: {$tempotrabalho} anos. <br>Requer Aposentadoria";
            }else{
                $resultadofinal = "A idade do funcionário é: {$idade} anos. <br>O tempo de trabalho do funcionário é: {$tempotrabalho} anos. <br>Não Requer Aposentadoria";
            } 
        }else{
            $resultadofinal = "Por favor, digite seu ano de nascimento e o ano que ingressou!! ";
        }
    return $resultadofinal;
    }

    // Exercício 11:
    function facaSeuCadastro($nome, $email, $cpf, $idade){
        if(isset($nome) && !empty($nome) || ($nome == "0") && ($nome != NULL)){
            $resultadofinal = "Nome: {$nome} <br>E-mail: {$email} <br>CPF: {$cpf} <br>Idade: {$idade} ano(s).";
        }else{
            $resultadofinal ="Por favor, digite seu dados!! ";
        }
    return $resultadofinal;
    }
?>