<!-- EXERCÍCIO PRÁTICO: ORIENTAÇÃO A OBJETOS EM PHP
Objetivo:

Este exercício tem como objetivo praticar a criação e manipulação de objetos em PHP usando conceitos de encapsulamento, construtores, herança e métodos.
 
-->

<?php
// Parte 1: Manipulação de Livros (Encapsulamento)

// 1. Criação da classe "book"
class book {
    // Propriedades
    public $bookTitle; 
    public $bookAuthor; 
    public $bookYear; 

    // Métodos
    function set_name($newTitle) {
        $this->bookTitle = $newTitle; 
    }
    
    function get_name() {
        return $this->bookTitle; 
    }

    function set_bookAuthor($newAuthor) {
        $this->bookAuthor = $newAuthor;
    }
    
    function get_bookAuthor() {
        return $this->bookAuthor;
    }

    function set_bookYear($newYear) {
        $this->bookYear = $newYear;
    }
    
    function get_bookYear() {
        return $this->bookYear;
    }
}

// 2. Instanciando os objetos
$livro1 = new book();
$livro1->set_name('É assim que acaba');
$livro1->set_bookAuthor('Collen Hoover');
$livro1->set_bookYear('2018');

$livro2 = new book();
$livro2->set_name('Novembro 9');
$livro2->set_bookAuthor('Collen Hoover');
$livro2->set_bookYear('2015');

// 3. Exibindo as informações
echo $livro1->get_name() . " - Autora: " . $livro1->get_bookAuthor() .  " // " .$livro1->get_bookYear()."<br>";
echo $livro2->get_name() . " - Autora: " . $livro2->get_bookAuthor() .  " // " .$livro2->get_bookYear()."<br>";
?>

<?php
// Parte 2: Uso de Construtores em Livros

// 1. Modificação da classe "book" com construtor
class book {
    // Propriedades
    public $bookTitle; 
    public $bookAuthor; 
    public $bookYear; 

    // Construtor
    function __construct($Title, $Author, $Year) {
        $this->bookTitle = $Title;
        $this->bookAuthor = $Author;
        $this->bookYear = $Year;
    }

    // Métodos
    function get_Title() {
        return $this->bookTitle; 
    }
    function get_Author() {
        return $this->bookAuthor;
    }

    function get_Year() {
        return $this->bookYear;
    }
}

// 2. Instanciando os objetos com o construtor
$livro1 = new book('É assim que acaba', 'Collen Hoover', '2018');
echo $livro1->get_Title() . " - Autora: " . $livro1->get_Author() .  " // " .$livro1->get_Year()."<br>";

$livro2 = new book('Novembro 9', 'Collen Hoover', '2015');
echo $livro2->get_Title() . " - Autora: " . $livro2->get_Author() .  " // " .$livro2->get_Year()."<br>";
?>

<?php
// Parte 3: Carros Elétricos e Herança

// 1. Criação da classe "Carros"
class Carros {
    public $CarroModelo;
    public $CarroAno;

    function __construct($modelo, $ano) {
        $this->CarroModelo = $modelo;
        $this->CarroAno = $ano;
    }

    // Método para exibir as informações do carro
    public function info() {
        echo "Este carro é um {$this->CarroModelo} do ano {$this->CarroAno}.<br>";
    }
}

// 2. Criação da classe "Eletrico" que herda de "Carros"
class Eletrico extends Carros {
    public $autonomia; 

    function set_autonomia($newAutonomia) {
        $this->autonomia = $newAutonomia; 
    }
    
    // Método para exibir a autonomia do carro elétrico
    public function info_autonomia() {
        echo "Este carro elétrico tem uma autonomia de {$this->autonomia} km com uma única carga.";
    }
}

// 3. Instanciando o objeto da classe "Eletrico"
$carro1 = new Eletrico("Tesla Model S", "2023");
$carro1->set_autonomia("600");
$carro1->info(); // Exibe as informações do carro
$carro1->info_autonomia(); // Exibe a autonomia do carro elétrico
?>
