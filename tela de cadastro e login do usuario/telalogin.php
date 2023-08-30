<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <form action="" method="post">
        <div class="pb-1 mt-1 col-12 col-md-4">
            <label for="emailLogin">Email:</label>
        </div>
        <input type="text" id="emailLogin" name="emailLogin"><br><br>
        <div class="pb-1 mt-1 col-12 col-md-4">
            <label for="senhaLogin">Senha:</label>
        </div>
        <input type="password" id="senhaLogin" name="senhaLogin"><br><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
