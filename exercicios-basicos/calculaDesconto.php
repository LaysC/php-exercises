<!-- 
    EXERCÍCIO calculaDesconto
    
    Objetivo:
    Criar uma função para calcular o valor com desconto. A função recebe dois parâmetros:
    o valor original e a porcentagem de desconto. Ela retorna o valor após o desconto ser aplicado.

    No código a seguir, o valor inicial é R$10, e o desconto aplicado é de 5%.
-->

<?php
    // Função para calcular o valor com desconto
    function calculaDesconto($valor, $desconto) {
        // Aplica o desconto ao valor informado
        $desconto = $valor - (($valor * $desconto) / 100);
        return $desconto;
    }

    // Preço inicial e a porcentagem de desconto
    $preco = 10;
    $porcentagem = 5;

    // Exibe os resultados
    echo "O valor era R$$preco <br>";
    echo "Após o desconto de $porcentagem% o valor ficou R$". calculaDesconto($preco, $porcentagem) . "<br>";
?>
