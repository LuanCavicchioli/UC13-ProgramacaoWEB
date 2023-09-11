<?php
include 'Endereco.php'; // Inclua o arquivo com a classe Endereco

$endereco = new Endereco(); // Crie uma instância da classe Endereco

$cep = "17523-110"; 
$endereco->buscarEndereco($cep); 
$endereco->imprimirEndereco($cep); 

?>