<?php
$resultado = "";

if ($_POST) {
    $numero  = $_POST['numero'];

    $numeros = "";
    $produto = 1;

    for ($i = 1; $i <= $numero; $i++) {
        $numeros .= $i . " ";
        $produto *= $i;
    }

    $resultado = "
    Números de 1 até $numero:<br>
    $numeros<br><br>
    Produto de todos os números: $produto
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 8</title>
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
    <h2>Exercício 8</h2>
    <p>Ler um número e imprimir todos os números de 1 até ele e o seu produto.</p>

    <form method="POST">
        <input type="number" name="numero" min="1" placeholder="Digite um número" required>
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