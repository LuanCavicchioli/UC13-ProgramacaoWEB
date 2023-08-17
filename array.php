<?php

//Array em PHP, = array();
$listaCompra = ["Arroz","Feijao","Ovo","Picanha"];

//print_r Serve para mostrar onde está o erro, ou depurar e mostrar os valores
echo print_r($listaCompra);

//var_dump serve para mostrar a posição e a quantidade de caracteres
var_dump($listaCompra);

echo("<hr>");

//echo $listaCompra[2], o 2 é a posição inicial, sempre começa do zero  
echo $listaCompra[2];

echo("<hr>");

//Laço de repetição para mostrar todos itens" no array, deve armazenar uma variavel para imprimir a partil dela.
foreach($listaCompra as $Item){
    echo $Item. " - " ;
}

//Esse comando serve para mostrar a posição das variaveis, sendo 0 arroz, 1 feijao , etc.
echo("<hr>");

//Serve para adicionar mais um item direto na lista, assim nao tendo que modificar o codigo anteriormente, é necessario a chave[] para ele saber que a implementação é dentro do array
$listaCompra[] = "oleo";

foreach($listaCompra as $indice => $Item){
    echo $indice. "-".$Item. " - " ;
}