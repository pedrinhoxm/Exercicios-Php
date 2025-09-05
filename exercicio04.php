<?php
$resultado = "";

if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];
    
    $numeros = [$num1, $num2, $num3];
    rsort($numeros);
    
    $resultado = "Ordem decrescente: " . $numeros[0] . ", " . $numeros[1] . ", " . $numeros[2];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 4</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 4</h2>
    <p>Entrar com 3 números e imprimi-los em ordem decrescente.</p>

    <form method="POST">
        <input type="number" name="num1" placeholder="Primeiro número" required>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <input type="number" name="num3" placeholder="Terceiro número" required>
        <button type="submit">Ordenar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>