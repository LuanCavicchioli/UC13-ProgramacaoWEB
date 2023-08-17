<?php

//include serve para meio que herdar sem dar ctrl c + ctrl V assim puxando tudo de uma vez
include "funcionarios.php";

?>
<html>

<head>
    <title>Lista de Funcionarios</title>
</head>

<body>
    <h1>Lista de Funcionarios</h1>
    <!--Usar table para inicializar uma tabela, tr para colunas e td para ajeitar as mesmas-->
    <table border="1">
        <!--providencia informações gerais (metadados) sobre o documento, incluindo seu título e links para scripts e folhas de estilos.-->
        <thead>
            <!--td e uma cedula-->
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($listaFuncionarios as $funcionario) : ?>
                <!--serve para organizar o codigo-->
                <tr>
                <!--ele automaticamente vai setar os ID na ordem com o comando ?=$funcionario["id"]? com o comando-->
                    <th><?=$funcionario["id"]?></th>
                    <td><?=$funcionario["nome"]?></td>
                    <td><?=$funcionario["email"]?></td>
                    <td><?=$funcionario["telefone"]?></td>
                    <td>Editar Vizulizar Excluir</td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <!--colspan serve para mesclar as linhas-->
                <td colspan="5">Foi encontrado 5 funcionarios cadastrados</td>
            </tr>
        </tfoot>
    </table>
</body>

</html>