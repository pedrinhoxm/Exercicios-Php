<?php
$resultado = "";

if ($_POST) {
    $numero = $_POST['numero'];
    
    $resultado = "<h3>Tabuada do $numero:</h3>";
    
    for ($i = 1; $i <= 10; $i++) {
        $produto = $numero * $i;
        $resultado .= "$numero x $i = $produto<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 11</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; font-family: monospace; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 11</h2>
    <p>Criar um algoritmo que imprima a tabuada de um número.</p>

    <form method="POST">
        <input type="number" name="numero" placeholder="Digite um número" required>
        <button type="submit">Gerar Tabuada</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>