<?php

$nome  = "Luan Aziani";
$email = "azianiluan77@gmail.com";
$senha = "12345678";
$idade = 16;

echo "<h1>Estrutura condicional";
echo "<hr>";

echo "<h5>Exemplo de if e else()<h5>";
echo "<br>";

//Exemplo de IF e ELSE
if($idade >= 18){
    echo "O usuario $nome é maior de idade";
}
else{
    echo "O usuario $nome é menor de idade";
}

echo "<hr>";

if($senha == "12345678"){
    echo "A senha e valida";
}
else{
    echo "A senha e invalida";
}

///////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de if e else()<h5>";

if($idade <= 18){
    echo "Jovem";
}else if($idade <= 21){
    echo "Adulto";
}else{
    echo "Velho";
}
//////////////////////////////////
echo "<hr>";
echo "<h5>Exemplo de if Ternario()<h5>";

//Verificação de uma forma mais simples
echo($idade >= 18)?"Maior De Idade":"Menor De Idade";


echo "<hr>";
echo "<h5>Exemplo de condição para formulario de login()<h5>";


//Verificação de email e senha
if($email =="luan@gmail.com"&& $senha == "1234567"){
    echo "Usuario Autenticado";
}
else{
    echo "Usuario ou senha invalidos";
}


echo "<hr>";
echo "<h5>Verificar se o numero é par ou impar()<h5>";

$numero = 10;
    if($numero % 2 == 0){
        echo "O numero $numero é par";
    }
    else{
        echo "O numero $numero é impar";
    }

    echo "<hr>";
    echo "<h5>Mostre o dia da semana()<h5>";

    //0 domingo, 1 segunda, 2 terça
    
    $diaSemana = date('w');
    

    if($diaSemana ==0  ){
        echo "Hoje é domingo";
    }
    else if($diaSemana == 1){
        echo "Hoje é segunda";
    }
    else if($diaSemana ==2){
        echo "Hoje é terça";
    }
    else if($diaSemana ==3){
        echo "Hoje é quarta";    
    }
    else if($diaSemana ==4){
        echo "Hoje é quinta";      
    }
    else if($diaSemana ==5){
        echo "Hoje é sexta";
    }
 
?>