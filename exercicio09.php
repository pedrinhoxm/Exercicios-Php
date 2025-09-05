<?php
$resultado = "";

if ($_POST) {
    $vezes = $_POST['vezes'];
    
    $resultado = "";
    
    for ($i = 1; $i <= $vezes; $i++) {
        $resultado .= "SOL ";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 9</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; word-wrap: break-word; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 9</h2>
    <p>Entrar com o número de vezes que se deseja imprimir a palavra SOL.</p>

    <form method="POST">
        <input type="number" name="vezes" min="1" placeholder="Quantas vezes imprimir SOL?" required>
        <button type="submit">Imprimir</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>