<?php
class Biblioteca
{
    protected $nomeLivro;
    public $autor;
    protected $isbn;
    public $numeroDePaginas;
    public $nomeUsuario;

    public function nomeLivroPublic()
    {
        return $this->nomeLivro;
    }
    public function IsbnPublic()
    {
        return $this->isbn;
    }

    public function __construct($tituloLivro, $autor, $isbn, $numeroDePaginas, $nomeUsuario)
    {
        $this->nomeUsuario = $nomeUsuario;
        $this->nomeLivro = $tituloLivro;
        $this->autor = $autor;
        $this->isbn = $isbn;
        $this->numeroDePaginas = $numeroDePaginas;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tituloLivro = $_POST["tituloLivro"];
    $autor = $_POST["autor"];
    $isbn = $_POST["isbn"];
    $numeroDePaginas = $_POST["numeroDePaginas"];
    $nomeUsuario = $_POST["nomeUsuario"];
    $biblioteca = new Biblioteca($tituloLivro, $autor, $isbn, $numeroDePaginas, $nomeUsuario);
}
?>
<!DOCTYPE html>

<html>

<head>
    <title>Resultado da Biblioteca</title>
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
    <script>
        function exibirMensagem(){
            alert("Cadastro Realizado Com Sucesso!");
        }
    </script>
</head>

<body>
    <h2>Formulário de Entrada</h2>
    <form action="" method="post">
        <label for="tituloLivro">Título do Livro:</label>
        <input type="text" id="tituloLivro" name="tituloLivro"><br><br>
        <label for="autor">Autor:</label>
        <input type="text" id="autor" name="autor"><br><br>
        <label for="isbn">ISBN:</label>
        <input type="text" id="isbn" name="isbn"><br><br>
        <label for="numeroDePaginas">Número de Páginas:</label>     
        <input type="number" id="numeroDePaginas" name="numeroDePaginas"><br><br>
        <label for="nomeUsuario">Nome do Usuário:</label>
        <input type="text" id="nomeUsuario" name="nomeUsuario"><br><br>
        <input type="submit" value="Criar Livro na Biblioteca" onclick="exibirMensagem()">

    </form>

    <h1>Resultado da Biblioteca</h1>

    <?php if (isset($biblioteca)) : ?>
        <p>Livro: <?= $biblioteca->nomeLivroPublic() ?></p>
        <p>Autor: <?= $biblioteca->autor ?></p>
        <p>ISBN: <?= $biblioteca->IsbnPublic() ?></p>
        <p>Número de Páginas: <?= $biblioteca->numeroDePaginas ?></p>
        <p>Nome do Usuário: <?= $biblioteca->nomeUsuario ?></p>
    <?php endif; ?>

</body>

</html>
