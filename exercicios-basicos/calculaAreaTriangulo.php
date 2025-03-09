<!-- 
    EXERCÍCIO calculaAreaTriangulo

    Objetivo:
    Criar uma função que calcula a área de um triângulo. A função recebe a base e a altura do triângulo como parâmetros e retorna a área, utilizando a fórmula:
    Área = (base * altura) / 2.

    No código abaixo, a base do triângulo é 10 e a altura é 20, e a área será calculada.
-->

<?php
    // Função para calcular a área de um triângulo
    function calculaAreaTriangulo($base, $altura) {
        // Fórmula para calcular a área do triângulo
        return $area = ($base * $altura) / 2;
    }

    // Valores para a base e altura do triângulo
    $base = 10;
    $altura = 20;

    // Exibe a base, altura e a área do triângulo
    echo "A base do seu triângulo é $base e a altura é $altura <br>";
    echo "Portanto, sua área equivale a: " . calculaAreaTriangulo($base, $altura) . "<br>";
?>
