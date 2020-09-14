<!DOCTYPE html>
<html lang="pt">
    <head>
        <title>PHP - Realizar Cadastro</title>
        <meta charset="UTF-8">
        
        <link rel="stylesheet" href="style.css" type="text/css">
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
            <!-- Formulario de cadastro -->
            <!-- Action vazio retornou um ERRO durante a validação do HTML! -->


            <form name="formulario" action="" method="POST">
                <!-- Espacamento necessário para formatação correta! -->
                <p>Nome completo: <br/>                                                             <input class="boxTexto"     type="text"     name="nome"/>       </p>
                <p>E-mail: <br/>                                                                    <input class="boxTexto"     type="email"    name="email"/>     </p>
                <p>Endereço: <br/>                                                                  <input class="boxTexto"     type="text"    name="endereco"/>     </p>
                <p>Idade:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;                           <input class="boxNumber"    type="text"     name="idade"/>     </p>
                <p>Telefone:&nbsp;&nbsp;&nbsp;&nbsp;                                                <input class="boxNumber"    type="text"      name="telefone"/>   </p>
                <p>RA:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="boxNumber"    type="text"     name="ra"/>        </p>

                <p>Sexo:<br/><br/>
                <input class="boxRadio" type="radio" name="sexo" value="Masculino"/> Masculino <br/>
                <input class="boxRadio" type="radio" name="sexo" value="Feminino"/> Feminino <br/>
                <input class="boxRadio" type="radio" name="sexo" value="Outro"/> Outro <br/><br/>
                </p>

                <input name="botaoCadastro" class="botao" type="submit" value="Cadastrar"/>
            </form>
        </div>
        
       <div id="rodape">
           <p id="textoRodape"> © 2019 Cadastro Alunos - Site desenvolvido por <b><i>Matheus Bruder</i></b> e <b><i>Kevin Barrios</i></b> e <b><i>Matheus Rosisca</i></b>. </p>
       </div>


       <?php
           include "classAluno.php";
           if (session_id() == "") {
               session_start();
           }

           if(isset($_POST["botaoCadastro"])) {

               $nome = $_POST["nome"];
               $RA = $_POST["ra"];
               $sexo = $_POST["sexo"];
               $idade = $_POST["idade"];
               $endereco = $_POST["endereco"];
               $telefone = $_POST["telefone"];
               $email = $_POST["email"];

               // CRIANDO OBJ ALUNO!
               $aluno = new Aluno($nome, $RA, $sexo, $idade, $endereco, $telefone, $email);


               $_SESSION[$aluno->nome] = $aluno;
               $serializado = serialize($_SESSION);
               file_put_contents('DadosAlunos.txt', $serializado);
           }
       ?>
    </body>
</html>
