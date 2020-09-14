/*
    Created on : 06/09/2019
    Author     : Matheus Bruder
    RA         : 222327

    Arquivo de Script ".js"
*/

var jogador = 'x';
var contador = 0;

/* Funcao responsavel por fazer as imagens aparecerem */
function swap(id)
{
    if (document.getElementById(id).getAttribute("src") === "imagens/branco.png") {
        document.getElementById(id).setAttribute("src", "imagens/" + jogador + ".png");
        contador += 1;



        if (Vitoria()) {
            alert("Fim de jogo - Vitória do jogador: " + jogador + "!");
            /* Recarregar pagina */
            window.location.reload();
        }

        if (contador >= 9 && !(Vitoria())) {
            alert("Fim de jogo - Deu velha!");
            /* Recarregar pagina */
            window.location.reload();
        }


        if (jogador === 'x') {
            jogador = 'o';
            atualizaCurrentPlayer(playtime = playero);
        } else {
            jogador = 'x';
            atualizaCurrentPlayer(playtime = playerx);
        }
    }
}




/* ------------------------------ Funcoes que verificam vitoria ------------------------------ */
function Vitoria()
{
    /* Vitoria na primeira linha */
    if((document.getElementById("c01").getAttribute("src") === document.getElementById("c02").getAttribute("src"))
        && (document.getElementById("c01").getAttribute("src") === document.getElementById("c03").getAttribute("src"))
        && (document.getElementById("c01").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na segunda linha */
    if((document.getElementById("c04").getAttribute("src") === document.getElementById("c05").getAttribute("src"))
        && (document.getElementById("c04").getAttribute("src") === document.getElementById("c06").getAttribute("src"))
        && (document.getElementById("c04").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na terceira linha */
    if((document.getElementById("c07").getAttribute("src") === document.getElementById("c08").getAttribute("src"))
        && (document.getElementById("c07").getAttribute("src") === document.getElementById("c09").getAttribute("src"))
        && (document.getElementById("c07").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na primeira coluna */
    if((document.getElementById("c01").getAttribute("src") === document.getElementById("c04").getAttribute("src"))
        && (document.getElementById("c01").getAttribute("src") === document.getElementById("c07").getAttribute("src"))
        && (document.getElementById("c01").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na segunda coluna */
    if((document.getElementById("c02").getAttribute("src") === document.getElementById("c05").getAttribute("src"))
        && (document.getElementById("c02").getAttribute("src") === document.getElementById("c08").getAttribute("src"))
        && (document.getElementById("c02").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na terceira coluna */
    if((document.getElementById("c03").getAttribute("src") === document.getElementById("c06").getAttribute("src"))
        && (document.getElementById("c03").getAttribute("src") === document.getElementById("c09").getAttribute("src"))
        && (document.getElementById("c03").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na diagonal um */
    if((document.getElementById("c01").getAttribute("src") === document.getElementById("c05").getAttribute("src"))
        && (document.getElementById("c01").getAttribute("src") === document.getElementById("c09").getAttribute("src"))
        && (document.getElementById("c01").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }

    /* Vitoria na diagonal dois */
    if((document.getElementById("c03").getAttribute("src") === document.getElementById("c05").getAttribute("src"))
        && (document.getElementById("c03").getAttribute("src") === document.getElementById("c07").getAttribute("src"))
        && (document.getElementById("c03").getAttribute("src") !== "imagens/branco.png"))
    {
        return true;
    }
}

const playerx = 'x';
const playero = 'O';
var playtime = playerx;
var gameover = false;



function atualizaCurrentPlayer(){
    if(gameover){
        return;
    }


    if(playtime === playerx ){
        var player = document.querySelectorAll("div#Current_Player img")[0];
        player.setAttribute("src","imagens/x.png");
    }else if (playtime === playero){
        var player = document.querySelectorAll("div#Current_Player img")[0];
        player.setAttribute("src","imagens/o.png");
    }
}

