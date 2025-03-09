<!-- 
    EXERCÍCIO chamada de alunos

    Objetivo:
    Criar uma classe chamada "chamada" que contenha os dados de um aluno (nome, endereço e RA).
    A classe deve ter métodos para definir (set) e obter (get) esses dados. Depois, instanciar objetos dessa classe e exibir as informações de cada aluno.
-->

<?php

// Definindo a classe chamada
class chamada {
    public $nome; 
    public $endereco;
    public $RA; 

    // Método para definir o nome do aluno
    function set_nome($brand) {
        $this->nome = $brand; 
    }
    
    // Método para obter o nome do aluno
    function get_nome() {
        return $this->nome; 
    }

    // Método para definir o endereço do aluno
    function set_endereco($model) {
        $this->endereco = $model;
    }
    
    // Método para obter o endereço do aluno
    function get_endereco() {
        return $this->endereco;
    }

    // Método para definir o RA do aluno
    function set_RA($color) {
        $this->RA = $color;
    }
    
    // Método para obter o RA do aluno
    function get_RA() {
        return $this->RA;
    }
}

// Instanciando objetos da classe chamada e definindo os dados dos alunos
$aluno1 = new chamada();
$aluno1->set_nome('Lucas');
$aluno1->set_endereco('Rua Ipanema');
$aluno1->set_RA('145896');

$aluno2 = new chamada();
$aluno2->set_nome('Ana');
$aluno2->set_endereco('Rua Bueno de Ávila');
$aluno2->set_RA('258746');

$aluno3 = new chamada();
$aluno3->set_nome('Marcela');
$aluno3->set_endereco('Rua Engenheiro Carvalho');
$aluno3->set_RA('252689');

// Exibindo os dados dos alunos
echo "Aluno 1: " . $aluno1->get_nome() . " - Endereço: " . $aluno1->get_endereco(). " - RA: " . $aluno1->get_RA() . "<br>";
echo "Aluno 2: " . $aluno2->get_nome() . " - Endereço: " . $aluno2->get_endereco(). " - RA: " . $aluno2->get_RA() . "<br>";
echo "Aluno 3: " . $aluno3->get_nome() . " - Endereço: " . $aluno3->get_endereco(). " - RA: " . $aluno3->get_RA() . "<br>";

?>