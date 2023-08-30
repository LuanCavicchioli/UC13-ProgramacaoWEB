<?php
session_start();
class Usuario
{
    public $nomeUsuario;
    protected $emailUsuario;
    protected $senhaUsuario;
    public $perfil;

    public function emailUsuarioPublic()
    {
        return $this->emailUsuario;
    }

    public function senhaUsuarioPublic()
    {
        return $this->senhaUsuario;
    }

    public function __construct($nomeUsuario, $emailUsuario, $senhaUsuario, $perfil)
    {
        $this->nomeUsuario = $nomeUsuario;
        $this->emailUsuario = $emailUsuario;
        $this->senhaUsuario = $senhaUsuario;
        $this->perfil = $perfil;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUsuario = $_POST["nomeUsuario"];
    $emailUsuario = $_POST["emailUsuario"];
    $senhaUsuario = $_POST["senhaUsuario"];
    $perfil = isset($_POST["perfil"]) ? $_POST["perfil"] : null;

    $novoUsuario = new Usuario($nomeUsuario, $emailUsuario, $senhaUsuario, $perfil);

    $_SESSION['usuarios'][] = $novoUsuario;
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro De Usuario</title>
    <style>
        body {
            width: 600px;
            margin: 0 auto;
            padding: 0 20px 20px 20px;
            border-radius: 5px;
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
        function validarFormulario() {
            var nome = document.getElementById("nomeUsuario").value;
            var email = document.getElementById("emailUsuario").value;
            var senha = document.getElementById("senhaUsuario").value;
            var perfil = document.querySelector('input[name="perfil"]:checked');

            if (nome === "" || email === "" || senha === "" || perfil === null) {
                alert("Por favor, preencha todos os campos.");
                return false;
            }

            return true;
        }

        function exibirMensagem() {
            if (validarFormulario()) {
                alert("Cadastro Realizado Com Sucesso!");
            }
        }
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <h1>Cadastro De Usuario</h1>
    <form action="" method="post">
        <div class="pb-1 mt-1 col-12 col-md-4">
            <label for="nomeUsario">Nome :</label>
        </div>
        <input type="text" id="nomeUsuario" name="nomeUsuario"><br><br>
        <div class="pb-1 mt-1 col-12 col-md-4">
        <label for="emailUusario">Email :</label>
        </div>
        <input type="text" id="emailUsuario" name="emailUsuario"><br><br>
        <div class="pb-1 mt-1 col-12 col-md-4">
        <label for="senhaUsario">Senha :</label>
        </div>  
        <input type="password" id="senhaUsuario" name="senhaUsuario"><br><br>
        <div class="pb-1 mt-1 col-12 col-md-4">
        <label for="perfil">Perfil:</label><br>
        <input type="radio" id="perfil" name="perfil" value="aluno">
        <label for="perfil1">Aluno</label><br>
        <input type="radio" id="perfil1" name="perfil" value="administrativo">
        <label for="perfil1">Administrativo</label><br>
        <input type="submit" value="Cadastrar" onclick="exibirMensagem()">
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>