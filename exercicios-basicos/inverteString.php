<!-- 
    EXERCÍCIO inverteString

    Objetivo:
    Criar uma função que inverte uma string. A função recebe uma string como parâmetro e retorna a string invertida, utilizando a função nativa strrev() do PHP.

    No exemplo abaixo, a palavra "Prova" será invertida.
-->

<?php
    // Função para inverter a string
    function inverteString($string) {
        // Retorna a string invertida usando a função strrev()
        return strrev($string);
    }

    // Definindo a palavra a ser invertida
    $palavra = "Prova";

    // Exibe a palavra original e a palavra invertida
    echo "A palavra é: $palavra <br>";
    echo "Invertida fica: " . inverteString($palavra) . "<br>";
?>