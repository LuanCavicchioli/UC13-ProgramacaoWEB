<?php

//Array multidimensional, lembrar de dar virugla apos utilizar [], sempre utilizar => para atribuir o valor, se for deixado o mesmo numero do indice, ele vai substituir pelo ultimo escrito, sempre colocar uma regra de indice, se nao colocar o numero do indice ele vai começar setando por 0 e assim em diante,=> serve para deixar o indice dinamico

$listaFuncionarios = [
    [
        "id" => 1,
        "nome"=> 'Luan',
        "email"=>'luan@gmail.com',
        "telefone"=>"(14)991078050"

    ],
    //tem como colocar com esse comando => ai na frente coloca o numero da tabela
    [
         "id" => 2,
        "nome"=> 'Nicolai',
        "email"=>'nicolai@gmail.com',
        "telefone"=>"(14)999999999"

    ],
    [
        "id" => 3,
        "nome"=> 'Ronaldo',
        "email"=>'ronaldo@gmail.com',
        "telefone"=>"(14)999999999"
    ],
    [
        "id" => 4,
        "nome"=> 'Ronaldo',
        "email"=>'ronaldo@gmail.com',
        "telefone"=>"(14)999999999"
    ]
];
//Uma forma de adicionar fora do array, dentro do [] deverá ser dito a posição seguindo a ordem, deve armazenador o contador em uma variavel por exemplo como $qtdDeFuncionarios, assim colocando no lugar do ["aqui dentro"] o comando
$qtdDeFuncionarios = count($listaFuncionarios);
$listaFuncionarios[$qtdDeFuncionarios]["id"]= 5;
$listaFuncionarios[$qtdDeFuncionarios]["nome"]= 'teste';
$listaFuncionarios[$qtdDeFuncionarios]["email"]= 'teste@gmail.com';
$listaFuncionarios[$qtdDeFuncionarios]["telefone"]= '(14)999999999';
//var_dump($listaFuncionarios);

//count serve para contar a quantidade de elementos naquele array principal

