<?php
$resultado = "";

if ($_POST) {
    $somaPositivos = 0;
    $totalNegativos = 0;
    
    // Loop para ler 20 números
    for ($i = 1; $i <= 20; $i++) {
        $numero = $_POST["num$i"];
        
        if ($numero > 0) {
            $somaPositivos += $numero;
        } elseif ($numero < 0) {
            $totalNegativos++;
        }
    }
    
    $resultado = "
    Soma dos números positivos: $somaPositivos<br>
    Total de números negativos: $totalNegativos
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 10</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        .numeros { display: grid; grid-template-columns: repeat(4, 1fr); gap: 10px; margin: 20px 0; }
        input[type="number"] { padding: 8px; font-size: 14px; text-align: center; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        label { font-size: 12px; text-align: center; }
    </style>
</head>
<body>
    <h2>Exercício 10</h2>
    <p>Entrar com 20 números e imprimir a soma dos positivos e o total de números negativos.</p>

    <form method="POST">
        <div class="numeros">
            <?php for ($i = 1; $i <= 20; $i++): ?>
                <div>
                    <label>Nº <?= $i ?></label>
                    <input type="number" name="num<?= $i ?>" required>
                </div>
            <?php endfor; ?>
        </div>
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