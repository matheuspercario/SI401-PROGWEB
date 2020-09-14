// Vetor global!
dadosCadastro = [];

function confirmacao() {
    var c = confirm("Realmente deseja cadastrar alun@?");
    if (c === true) {
        alert("Cadastro realizado!");
        return true;
    }
}



function cadastrarAluno() {
    var c = confirmacao();
    if (c === true) {
        var f = document.forms["formulario"];
        var dadosAluno = {
            'NOME': f["nome"].value,
            'EMAIL': f["email"].value,
            'IDADE': f["idade"].value,
            'TELEFONE': f["telefone"].value,
            'RA': f["ra"].value,
            'SEXO': f["sexo"].value
        }
        dadosCadastro.push(dadosAluno);

        // Teste
        // <!--document.getElementById("campos").innerHTML = dadosCadastro[0].NOME;-- >

        // Resetar 'document.forms["formulario"]'
        f.reset();
        return false;
    } else {
        alert("Cadastro NÃO realizado!");
        return false;
    }
}



function mostrarCadastros() {
    document.getElementById("campos").innerHTML = "<hr/>Alunos Cadastrados <br/> <hr/> <br/>";
    var texto = document.getElementById("demo");

    var i;
    var tamanho = dadosCadastro.length;
    var texto = "";

    for (i = 0; i < tamanho; i++) {
        texto += "<b>ALUNO " + "0" + i + " - </b>";
        texto += dadosCadastro[i].NOME + " | ";
        texto += "<b>RA: </b>" + dadosCadastro[i].RA + " | ";
        texto += "<b>E-mail: </b>" + dadosCadastro[i].EMAIL + " | ";
        texto += "<b>Idade: </b>" + dadosCadastro[i].IDADE + " | ";
        texto += "<b>Telefone: </b>" + dadosCadastro[i].TELEFONE + " | ";
        texto += "<b>Sexo: </b>" + dadosCadastro[i].SEXO;
        texto += "<br/><br/><br/>";
    }

    document.getElementById("demo").innerHTML = texto;
    return false;
}