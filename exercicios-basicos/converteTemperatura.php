<!-- 
    EXERCÍCIO converteTemperatura

    Objetivo:
    Criar uma função que converte uma temperatura de Celsius para Fahrenheit. A função recebe a temperatura em Celsius como parâmetro e retorna a temperatura equivalente em Fahrenheit, utilizando a fórmula de conversão: 
    F = (9/5 * C) + 32, onde C é a temperatura em Celsius e F é a temperatura em Fahrenheit.

    No código abaixo, a temperatura fornecida é 23°C e será convertida para Fahrenheit.
-->

<?php
    // Função para converter a temperatura de Celsius para Fahrenheit
    function converteTemperatura($temperaturaC) {
        // Fórmula de conversão de Celsius para Fahrenheit
        return $fah = (9/5 * $temperaturaC) + 32;
    }

    // Temperatura em Celsius
    $Celsius = 23;

    // Exibe as temperaturas em Celsius e Fahrenheit
    echo "A temperatura em Celsius é: $Celsius °C<br>";
    echo "Em Fahrenheit, a temperatura equivale a: " . converteTemperatura($Celsius) . "°F<br>";
?>
