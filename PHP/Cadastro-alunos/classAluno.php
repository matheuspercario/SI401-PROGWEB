<?php
    class Aluno
    {
        // ATRIBUTOS
        public $nome;
        public $RA;
        public $sexo;
        public $idade;
        public $endereco;
        public $telefone;
        public $email;

        // CONSTRUTOR
        function __construct($nome, $RA, $sexo, $idade, $endereco, $telefone, $email)
        {
            $this->nome = $nome;
            $this->RA = $RA;
            $this->sexo = $sexo;
            $this->idade = $idade;
            $this->endereco = $endereco;
            $this->telefone = $telefone;
            $this->email = $email;
        }

        // METODO QUE MOSTRA INFORMACOES
        function mostrarDados()
        {
            echo "<b>Aluno: </b>" . "$this->nome" . "&emsp;|&emsp;";
            echo "<b>Email: </b>" . "$this->email" . "&emsp;|&emsp;";
            echo "<b>Endereço: </b>" . "$this->endereco" . "&emsp;|&emsp;";
            echo "<b>Idade: </b>" . "$this->idade" . "&emsp;|&emsp;";
            echo "<b>Telefone: </b>" . "$this->telefone" . "&emsp;|&emsp;";
            echo "<b>RA: </b>" . "$this->RA" . "&emsp;|&emsp;";
            echo "<b>Sexo: </b>" . "$this->sexo";
            echo "<br/>";
        }
    }
?>
