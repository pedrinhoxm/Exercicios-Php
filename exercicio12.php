<?php
$resultado = "";

if ($_POST) {
    $palavra = strtoupper($_POST['palavra']);
    
    $resultado = "";
    $tamanho = strlen($palavra);
    
    for ($linha = 1; $linha <= $tamanho; $linha++) {
        for ($coluna = 1; $coluna <= $linha; $coluna++) {
            $resultado .= $palavra . " ";
        }
        $resultado .= "<br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 12</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 50px auto; padding: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; font-family: monospace; line-height: 1.5; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 12</h2>
    <p>Entrar com uma palavra e imprimir em formato de pirâmide.</p>
    
    <div style="background: #f9f9f9; padding: 10px; margin: 15px 0; border-left: 3px solid #ccc;">
        <strong>Exemplo com "SONHO":</strong><br>
        SONHO<br>
        SONHO SONHO<br>
        SONHO SONHO SONHO<br>
        SONHO SONHO SONHO SONHO<br>
        SONHO SONHO SONHO SONHO SONHO
    </div>

    <form method="POST">
        <input type="text" name="palavra" placeholder="Digite uma palavra" required>
        <button type="submit">Gerar Pirâmide</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>