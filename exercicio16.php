<?php
$resultado = "";

if ($_POST) {
    $resultado = "<h3>Verificação Par/Ímpar dos 15 números:</h3>";
    
    for ($i = 1; $i <= 15; $i++) {
        $numero = $_POST["num$i"];
        
        if ($numero % 2 == 0) {
            $tipo = "PAR";
            $cor = "#4CAF50";
        } else {
            $tipo = "ÍMPAR";
            $cor = "#FF5722";
        }
        
        $resultado .= "<span style='color: $cor; font-weight: bold;'>$numero é $tipo</span><br>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 16</title>
    <style>
        body { font-family: Arial; max-width: 700px; margin: 50px auto; padding: 20px; }
        .numeros { display: grid; grid-template-columns: repeat(5, 1fr); gap: 10px; margin: 20px 0; }
        input[type="number"] { padding: 8px; font-size: 14px; text-align: center; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; max-height: 400px; overflow-y: auto; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        label { font-size: 12px; text-align: center; display: block; margin-bottom: 3px; }
    </style>
</head>
<body>
    <h2>Exercício 16</h2>
    <p>Armazenar 15 números inteiros em um vetor e imprimir uma mensagem contendo o número e se é par ou ímpar.</p>

    <form method="POST">
        <div class="numeros">
            <?php for ($i = 1; $i <= 15; $i++): ?>
                <div>
                    <label>Nº <?= $i ?></label>
                    <input type="number" name="num<?= $i ?>" required>
                </div>
            <?php endfor; ?>
        </div>
        <button type="submit">Verificar Par/Ímpar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>