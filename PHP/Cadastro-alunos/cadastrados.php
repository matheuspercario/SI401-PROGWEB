<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>PHP - Alunos Cadastrados</title>
        <meta charset="UTF-8">

        <link rel="stylesheet" href="style.css" type="text/css">
        <script src="cadastrarAluno.js"></script>
    </head>

    <body>
        <div id="header">
            <h1>
                Cadastro de Alunos
            </h1>
        </div>

        <div id="barralateral">
            <table>
                <tr>
                    <td>
                        <ul class="menu">
                                <li class="listamenu"> <a href="index.php"> Realizar Cadastro </a> </li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>
                        <ul class="menu">
                                <li class="listamenu"> <a href="cadastrados.php"> Alunos Cadastrados </a> </li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>


        <div id="principal">
            <h2>Alunos Cadastrados<br/><br/></h2>
                <?php
                    include "classAluno.php";

                    function ordenar($a, $b)
                    {
                            if ($a->RA > $b->RA) {
                                return 1;
                            }
                            if ($a->RA < $b->RA) {
                                return -1;
                            }
                            return 0;
                    }

                    $serializado = file_get_contents('DadosAlunos.txt');
                    $a = unserialize($serializado);
                    uasort($a, "ordenar");
                    foreach($a as $value) {
                        echo "<p>";
                        echo ($value->mostrarDados());
                        echo "</p>";
                    }
                ?>
        </div>


       <div id="rodape">
           <p id="textoRodape"> © 2019 Cadastro Alunos - Site desenvolvido por <b><i>Matheus Bruder</i></b> e <b><i>Kevin Barrios</i></b> e <b><i>Matheus Rosisca</i></b>. </p>
       </div>
    </body>
</html>
