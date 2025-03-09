<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bhaskara</title>
</head>
<body>
    <!-- 
    Enunciado do Exercício - Cálculo das Raízes de uma Equação Quadrática
    
    Objetivo:
    Criar um formulário simples onde o usuário insere os coeficientes 
    A, B e C de uma equação quadrática Ax² + Bx + C = 0 e o programa calcula as raízes da equação utilizando a fórmula de Bhaskara.
    -->
    
    <form action="baskara.php" method="post">
        <!-- Entrada para o coeficiente A -->
        <label for="coeA">Coeficiente A:</label>
        <input type="number" name="coeA" placeholder="Digite seu coeficiente A"/>

        <!-- Entrada para o coeficiente B -->
        <label for="coeB">Coeficiente B:</label>
        <input type="number" name="coeB" placeholder="Digite seu coeficiente B"/>

        <!-- Entrada para o coeficiente C -->
        <label for="coeC">Coeficiente C:</label>
        <input type="number" name="coeC" placeholder="Digite seu coeficiente C"/>

        <!-- Botão para enviar os dados -->
        <button type="submit" value="enviar">Enviar</button>
    </form>

</body>
</html>

<?php
    // Recebe os coeficientes A, B e C do formulário
    $coeA = $_POST['coeA'];
    $coeB = $_POST['coeB'];
    $coeC = $_POST['coeC'];

    // Calcula o delta (discriminante) da equação quadrática
    $delta = ($coeB * $coeB) - 4 * $coeA * $coeC;

    // Verifica o valor de delta e calcula as raízes
    if ($delta < 0) {
        // Caso delta seja negativo, não há raízes reais
        echo("Não há raízes reais");
    } else if ($delta == 0) {
        // Caso delta seja igual a zero, há uma única raiz real
        $raiz1 = (-$coeB) / (2 * $coeA);
        echo("A raiz é: $raiz1");
    } else {
        // Caso delta seja positivo, existem duas raízes reais
        $raiz2 = (-$coeB + sqrt($delta)) / (2 * $coeA);
        $raiz3 = (-$coeB - sqrt($delta)) / (2 * $coeA);
        echo("As raízes são: $raiz2 e $raiz3");
    }
?>