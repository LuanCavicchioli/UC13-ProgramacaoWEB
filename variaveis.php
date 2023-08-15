<?php

$nomeCompleto = "Luan Aziani";
$idade = 16;
$status = true;
$salario = 1500.00;

echo $nomeCompleto;
echo "<hr>";
//"<hr>" Adiciona uma linha de divisão

echo strtoupper($nomeCompleto);
//strtoupper Transforma todo texto em MAIUSCULO
echo "<hr>";

echo strtolower($nomeCompleto);
//strtolower Transforma todo texto em MINUSCULO
echo "<hr>";

echo ucwords($nomeCompleto);
//ucwords Transforma primeira letra em MAIUSCULO
echo "<hr>";

echo str_replace("Luan", "Joao",$nomeCompleto);
//str_replace Serve Para procurar e substituir a informação ($nomeCompleto é a variael que ele ira procurar)
echo "<hr>";

echo str_repeat("Luan ",5);
//str_repeat o termo que voce quer repetir, e a quantidade de vezes
echo"<hr>";

echo isset($nome) ?'True':'False';
//isset serve para verificar a existência da variavel
echo "<hr>";

echo empty($nomeCompleto)?'True':'False';
//empty serve para verificar se nãos foi preenchido ou esta vazio
echo "<hr>";

?>