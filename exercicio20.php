<?php
$resultado = "";

if ($_POST) {
    $matriz = [];
    
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = $_POST["campo_$i" . "_$j"];
        }
    }
    
    $resultado = "<h3>📊 Resultado das 3 Matrizes:</h3>";
    
    $resultado .= "<h4>1️⃣ Matriz Completa (todos os números):</h4>";
    $resultado .= "<table style='border-collapse: collapse; margin: 15px auto;'>";
    for ($i = 0; $i < 5; $i++) {
        $resultado .= "<tr>";
        for ($j = 0; $j < 5; $j++) {
            $valor = $matriz[$i][$j];
            $resultado .= "<td style='border: 1px solid #ccc; padding: 8px; text-align: center; background-color: #f0f0f0;'>$valor</td>";
        }
        $resultado .= "</tr>";
    }
    $resultado .= "</table>";
    
    $resultado .= "<h4>2️⃣ Matriz apenas com números ÍMPARES:</h4>";
    $resultado .= "<table style='border-collapse: collapse; margin: 15px auto;'>";
    for ($i = 0; $i < 5; $i++) {
        $resultado .= "<tr>";
        for ($j = 0; $j < 5; $j++) {
            $valor = $matriz[$i][$j];
            if ($valor % 2 != 0) {
                $resultado .= "<td style='border: 1px solid #ccc; padding: 8px; text-align: center; background-color: #ffecb3; color: #f57c00; font-weight: bold;'>$valor</td>";
            } else {
                $resultado .= "<td style='border: 1px solid #ccc; padding: 8px; text-align: center; background-color: #fafafa; color: #bbb;'>-</td>";
            }
        }
        $resultado .= "</tr>";
    }
    $resultado .= "</table>";
    
    $resultado .= "<h4>3️⃣ Matriz apenas com números PARES:</h4>";
    $resultado .= "<table style='border-collapse: collapse; margin: 15px auto;'>";
    for ($i = 0; $i < 5; $i++) {
        $resultado .= "<tr>";
        for ($j = 0; $j < 5; $j++) {
            $valor = $matriz[$i][$j];
            if ($valor % 2 == 0) {
                $resultado .= "<td style='border: 1px solid #ccc; padding: 8px; text-align: center; background-color: #e8f5e8; color: #2e7d32; font-weight: bold;'>$valor</td>";
            } else {
                $resultado .= "<td style='border: 1px solid #ccc; padding: 8px; text-align: center; background-color: #fafafa; color: #bbb;'>-</td>";
            }
        }
        $resultado .= "</tr>";
    }
    $resultado .= "</table>";
    
    $totalPares = 0;
    $totalImpares = 0;
    foreach ($matriz as $linha) {
        foreach ($linha as $valor) {
            if ($valor % 2 == 0) {
                $totalPares++;
            } else {
                $totalImpares++;
            }
        }
    }
    
    $resultado .= "
    <div style='background: #e3f2fd; padding: 15px; margin: 20px 0; border-left: 4px solid #2196F3;'>
        <strong>📈 Estatísticas:</strong><br>
        • Total de números PARES: <span style='color: #2e7d32; font-weight: bold;'>$totalPares</span><br>
        • Total de números ÍMPARES: <span style='color: #f57c00; font-weight: bold;'>$totalImpares</span><br>
        • Total de elementos: 25
    </div>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 20</title>
    <style>
        body { font-family: Arial; max-width: 700px; margin: 50px auto; padding: 20px; }
        .matriz { display: grid; grid-template-columns: repeat(5, 1fr); gap: 5px; margin: 20px 0; max-width: 400px; margin-left: auto; margin-right: auto; }
        .matriz input { padding: 8px; font-size: 14px; text-align: center; width: 50px; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 20px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        .info { background: #fff3e0; padding: 15px; margin: 15px 0; border-left: 4px solid #ff9800; }
        h4 { text-align: center; margin: 20px 0 10px 0; }
        table { font-size: 14px; }
    </style>
</head>
<body>
    <h2>Exercício 20 - FINAL</h2>
    <p>Criar um algoritmo com uma matriz 5x5 e imprimir: toda a matriz, a matriz gerada só com números ímpares e outra só com números pares.</p>
    
    <div class="info">
        <strong>🎯 O programa vai gerar 3 matrizes:</strong><br>
        1️⃣ Matriz completa com todos os números<br>
        2️⃣ Matriz destacando apenas os números ÍMPARES<br>
        3️⃣ Matriz destacando apenas os números PARES
    </div>

    <form method="POST">
        <h4>Preencha a Matriz 5x5:</h4>
        <div class="matriz">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <?php for ($j = 0; $j < 5; $j++): ?>
                    <input type="number" 
                           name="campo_<?= $i ?>_<?= $j ?>" 
                           placeholder="<?= $i ?>,<?= $j ?>"
                           required>
                <?php endfor; ?>
            <?php endfor; ?>
        </div>
        <button type="submit">🎉 Gerar as 3 Matrizes</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">🏠 Voltar ao Menu Principal</a>
    </div>
</body>
</html>