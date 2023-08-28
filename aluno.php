<?php
class Aluno
{
    public $nomeAluno;
    protected $cpf;
    protected $senha;
    public $telefone;

    public function cpfPublic()
    {
        return $this->cpf;
    }
    public function senhaPublic()
    {
        return $this->senha;
    }

    public function __construct($nomeAluno, $cpf, $senha, $telefone)
    {
        $this->nomeAluno = $nomeAluno;
        $this->cpf = $cpf;
        $this->senha = $senha;
        $this->telefone = $telefone;
    }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeAluno = $_POST["nomeAluno"];
    $cpf = $_POST["cpf"];
    $senha = $_POST["senha"];
    $telefone = $_POST["telefone"];
    $nomeAluno = new Aluno($nomeAluno, $cpf, $senha, $telefone, $nomeAluno);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Aluno</title>
    <style>
        body {
            
            width: 600px;
            margin: 0 auto;
            padding: 0 20px 20px 20px;
            border-radius: 5px white;


        }
        
        h1 {
            margin: 0;
            padding: 30px 0;
            color: #4B0082;
        }

        h2 {
            margin: 0;
            padding: 20px 0;
            color: #4B0082;
        }
    </style>
    <script>
        function exibirMensagem() {
            alert("Cadastro Realizado Com Sucesso!");
        }
    </script>
</head>

<body>
    <h1>Formulario De Entrada Aluno</h2>
        <form action="" method="post">
            <label for="nomeAluno">Nome Do Aluno:</label>
            <input type="text" id="nomeAluno" name="nomeAluno"><br><br>
            <label for="cpfAluno">CPF Do Aluno:</label>

            <input type="text" id="cpf" name="cpf"><br><br>
            <label for="senhaAluno">Senha Do Aluno:</label>
            <input type="text" id="senha" name="senha"><br><br>
            <label for="telefoneAluno">Telefone Do Aluno:</label>
            <input type="text" id="telefone" name="telefone"><br><br>
            <input type="submit" value="Criar Novo Aluno" onclick="exibirMensagem()">

        </form>

        <h2>Resultado Do Cadastro De Aluno
    </h1>

    <?php if (isset($nomeAluno)) : ?>
        <p>Nome Do Aluno:<?= $nomeAluno->nomeAluno ?></p>
        <p>CPF Do Aluno:<?= $nomeAluno->cpfPublic() ?></p>
        <p>Senha Do Aluno:<?= $nomeAluno->senhaPublic() ?></p>
        <p>Telefone Do Aluno:<?= $nomeAluno->telefone ?></p>
    <?php endif; ?>
    <br>

    <p>



        Copyright &COPY; <?= date("d/m/Y H:i:s") ?> - Todos os direitos sao reservados ao seu pai



    </p>
</body>

</html>