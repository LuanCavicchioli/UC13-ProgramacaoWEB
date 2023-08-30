<?php
class Emprestimo
{
    protected $aluno;
    protected $livro;
    public $dataRetirada;
    public $dataDevolução;

    public function alunoPublic(){
        return $this->aluno;
    }
    public function livroPublic(){
        return $this->livro;
    }
    public function __construct($aluno, $livro, $dataRetirada, $dataDevolução)
    {
        $this->aluno = $aluno;
        $this->livro = $livro;
        $this->dataRetirada = $dataRetirada;
        $this->dataDevolução = $dataDevolução;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $aluno = $_POST["aluno"];
    $livro = $_POST["livro"];
    $dataRetirada = $_POST["dataRetirada"];
    $dataDevolução = $_POST["dataDevolução"];
    $novoEmprestimo = new Emprestimo($aluno, $livro, $dataRetirada, $dataDevolução);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Emprestimo</title>
</head>
<body>
    <h1>Formulário De Entrada Emprestimo</h1>
    <form action="container" method="post">
        <label for="aluno">Nome Do Aluno:</label>
        <input type="text" id="aluno" name="aluno"><br><br>
        <label for="livro">Nome Do Livro:</label>
        <input type="text" id="livro" name="livro"><br><br>
        <label for="dataRetirada">Data De Retirada:</label>
        <input type="date" id="dataRetirada" name="dataRetirada"><br><br>
        <label for="dataDevolução">Data De Devolução:</label>
        <input type="date" id="dataDevolução" name="dataDevolução"><br><br>
        <input type="submit" value="Criar Novo Emprestimo">
    </form>

    <h2>Resultado Cadastro Do Emprestimo</h2>
    <style>
        body {
            width: 600px;
            margin: 0 auto;
            padding: 0 20px 20px 20px;
            border-radius: 5px white;
        
            
        }
        
        h1{
            margin: 0;
            padding: 30px 0;
            color: #4B0082;
        }
        h2{
            margin: 0;
            padding: 20px 0;
            color: #4B0082;
        }
    </style>
    <?php if(isset($novoEmprestimo)) : ?>
        <p>Nome Do Aluno: <?=$novoEmprestimo->alunoPublic()?></p>
        <p>Nome Do Livro: <?=$novoEmprestimo->livroPublic()?></p>
        <p>Data De Retirada: <?=$novoEmprestimo->dataRetirada?></p>
        <p>Data De Devolução: <?=$novoEmprestimo->dataDevolução?></p>
    <?php endif;?>
</body>
</html>
