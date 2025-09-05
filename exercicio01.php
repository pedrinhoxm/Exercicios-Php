<?php
$resultado = "";

if ($_POST) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $soma = $num1 + $num2;

    if ($soma > 20) {
        $final = $soma + 8;
        $resultado = "Soma: $soma + 8 = $final";
    } else {
        $final = $soma - 5;
        $resultado = "Soma: $soma - 5 = $final";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 1</title>
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
    <h2>Exercício 1</h2>
    <p>Se soma > 20, adiciona 8. Se soma ≤ 20, subtrai 5.</p>

    <form method="POST">
        <input type="number" name="num1" placeholder="Primeiro número" required>
        <input type="number" name="num2" placeholder="Segundo número" required>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>