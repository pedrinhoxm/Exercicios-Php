<?php
$resultado = "";

if ($_POST) {
    $numeros = [];
    
    for ($i = 1; $i <= 20; $i++) {
        $numeros[] = $_POST["num$i"];
    }
    
    $maior = max($numeros);
    $menor = min($numeros);
    
    $pares = 0;
    foreach ($numeros as $num) {
        if ($num % 2 == 0) {
            $pares++;
        }
    }
    
    $percentualPares = ($pares / 20) * 100;
    
    $soma = array_sum($numeros);
    $media = $soma / 20;
    
    $resultado = "
    <h3>Análise do Vetor com 20 números:</h3>
    
    <strong>📊 Números digitados:</strong><br>
    " . implode(', ', $numeros) . "<br><br>
    
    <strong>📈 Estatísticas:</strong><br>
    • <span style='color: #4CAF50;'>Maior número:</span> $maior<br>
    • <span style='color: #f44336;'>Menor número:</span> $menor<br>
    • <span style='color: #2196F3;'>Números pares:</span> $pares de 20<br>
    • <span style='color: #2196F3;'>Percentual de pares:</span> " . number_format($percentualPares, 1) . "%<br>
    • <span style='color: #FF9800;'>Média dos elementos:</span> " . number_format($media, 2) . "
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 17</title>
    <style>
        body { font-family: Arial; max-width: 700px; margin: 50px auto; padding: 20px; }
        .numeros { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin: 20px 0; }
        input[type="number"] { padding: 8px; font-size: 14px; text-align: center; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 20px; margin: 20px 0; line-height: 1.6; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        label { font-size: 12px; text-align: center; display: block; margin-bottom: 3px; }
        .preenchimento { background: #e3f2fd; padding: 15px; margin: 15px 0; border-left: 4px solid #2196F3; }
    </style>
</head>
<body>
    <h2>Exercício 17</h2>
    <p>Criar um vetor com 20 números inteiros. Imprimir o maior, o menor, percentual de números pares e média dos elementos.</p>
    
    <div class="preenchimento">
        <strong>💡 Dica:</strong> Para teste rápido, tente números variados como: 1, 10, 25, 50, 100, etc.
    </div>

    <form method="POST">
        <div class="numeros">
            <?php for ($i = 1; $i <= 20; $i++): ?>
                <div>
                    <label>Nº <?= $i ?></label>
                    <input type="number" name="num<?= $i ?>" required>
                </div>
            <?php endfor; ?>
        </div>
        <button type="submit">📊 Analisar Vetor</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>