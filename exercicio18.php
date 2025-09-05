<?php
$resultado = "";

if ($_POST) {
    $vetor1 = [];
    $vetor2 = [];

    for ($i = 1; $i <= 10; $i++) {
        $vetor1[] = $_POST["v1_num$i"];
    }
    
    for ($i = 1; $i <= 10; $i++) {
        $vetor2[] = $_POST["v2_num$i"];
    }
    
    $naoComuns = [];
    
    foreach ($vetor1 as $num) {
        if (!in_array($num, $vetor2) && !in_array($num, $naoComuns)) {
            $naoComuns[] = $num;
        }
    }
    
    foreach ($vetor2 as $num) {
        if (!in_array($num, $vetor1) && !in_array($num, $naoComuns)) {
            $naoComuns[] = $num;
        }
    }
    
    sort($naoComuns);
    
    $resultado = "
    <h3>Comparação dos Vetores:</h3>
    
    <strong>📋 Vetor 1:</strong><br>
    [" . implode(', ', $vetor1) . "]<br><br>
    
    <strong>📋 Vetor 2:</strong><br>
    [" . implode(', ', $vetor2) . "]<br><br>
    
    <strong>🎯 Números NÃO COMUNS:</strong><br>";
    
    if (empty($naoComuns)) {
        $resultado .= "<span style='color: #FF9800;'>Nenhum número não comum encontrado!</span><br>";
        $resultado .= "<em>Todos os números aparecem em ambos os vetores.</em>";
    } else {
        $resultado .= "<span style='color: #4CAF50; font-size: 16px; font-weight: bold;'>[" . implode(', ', $naoComuns) . "]</span><br>";
        $resultado .= "<em>Total: " . count($naoComuns) . " números não comuns</em>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 18</title>
    <style>
        body { font-family: Arial; max-width: 800px; margin: 50px auto; padding: 20px; }
        .vetores { display: flex; gap: 30px; margin: 20px 0; }
        .vetor { flex: 1; }
        .vetor h3 { text-align: center; margin-bottom: 15px; }
        .numeros { display: grid; grid-template-columns: repeat(5, 1fr); gap: 8px; }
        input[type="number"] { padding: 6px; font-size: 14px; text-align: center; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 20px; margin: 20px 0; line-height: 1.6; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        label { font-size: 11px; text-align: center; display: block; margin-bottom: 2px; }
        .exemplo { background: #e8f5e8; padding: 15px; margin: 15px 0; border-left: 4px solid #4CAF50; }
    </style>
</head>
<body>
    <h2>Exercício 18</h2>
    <p>Criar 2 vetores com 10 números inteiros cada. Gerar e imprimir um vetor dos números não comuns aos 2 vetores.</p>
    
    <div class="exemplo">
        <strong>💡 Exemplo:</strong><br>
        Vetor 1: [1, 2, 3, 4, 5]<br>
        Vetor 2: [4, 5, 6, 7, 8]<br>
        Números não comuns: [1, 2, 3, 6, 7, 8]
    </div>

    <form method="POST">
        <div class="vetores">
            <div class="vetor">
                <h3 style="color: #2196F3;">📊 Vetor 1</h3>
                <div class="numeros">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <div>
                            <label><?= $i ?></label>
                            <input type="number" name="v1_num<?= $i ?>" required>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
            
            <div class="vetor">
                <h3 style="color: #FF5722;">📊 Vetor 2</h3>
                <div class="numeros">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <div>
                            <label><?= $i ?></label>
                            <input type="number" name="v2_num<?= $i ?>" required>
                        </div>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
        
        <button type="submit">🔍 Encontrar Números Não Comuns</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>