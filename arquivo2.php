<html>
    <head>
        <title>Aula de PHP</title>
    </head>
    <body>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat modi deserunt aspernatur at quod facilis ad! Mollitia, voluptate incidunt culpa esse repellat magnam odio repellendus, numquam voluptates officia voluptatem deserunt.</p>

        <?php

            echo"luan aziani";
            
        ?>

        <br>
        <!-- Comentario em HTML CTRL+ ; -->
        <?php

            print " Senac Marilia";

        ?>

        <br>

        <?php
        // Comentario em PHP
        /*
            varias
            linhas
        */
        $nomeCompleto = "Luan Aziani";
        $idade = 99;
        $status = true;
        $salario = 1320.50;//Utiliza o . para decimal
        

        echo $nomeCompleto." ".$idade;//Para imprimir com espaçõ
        echo "<br>";//Serve para dar quebra de linha
        echo "$nomeCompleto $idade anos";//Vai imprimer as informações da variavel
        echo "<br>";
        echo '$nomeCompleto $idade anos';

        $logosenac ="https://www.sp.senac.br/o/senac-theme/images/logo_senac_default.png"
        


        ?>

        <img src="<?php echo $logosenac ?> "alt="Senac Marilia">

    </body>

</html>