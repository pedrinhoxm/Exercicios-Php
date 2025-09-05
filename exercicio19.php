<?php
$resultado = "";

if ($_POST) {
    $matriz = [];
    
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            $matriz[$i][$j] = $_POST["campo_$i" . "_$j"];
        }
    }
    
    $diagonalPrincipal = [];
    for ($i = 0; $i < 5; $i++) {
        $diagonalPrincipal[] = $matriz[$i][$i];
    }
    
    $resultado = "
    <h3>Matriz 5x5 Completa:</h3>
    <table style='border-collapse: collapse; margin: 20px auto;'>
    ";
    
    for ($i = 0; $i < 5; $i++) {
        $resultado .= "<tr>";
        for ($j = 0; $j < 5; $j++) {
            $valor = $matriz[$i][$j];
            $cor = ($i == $j) ? "background-color: #4CAF50; color: white; font-weight: bold;" : "background-color: #f0f0f0;";
            $resultado .= "<td style='border: 1px solid #ccc; padding: 10px; text-align: center; $cor'>$valor</td>";
        }
        $resultado .= "</tr>";
    }
    
    $resultado .= "</table>";
    
    $resultado .= "
    <h3>🎯 Elementos da Diagonal Principal:</h3>
    <div style='background: #e8f5e8; padding: 15px; border-radius: 5px; text-align: center;'>
        <span style='color: #4CAF50; font-size: 18px; font-weight: bold;'>[" . implode(', ', $diagonalPrincipal) . "]</span><br>
        <em>Posições: [0,0], [1,1], [2,2], [3,3], [4,4]</em>
    </div>
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 19</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        .matriz { display: grid; grid-template-columns: repeat(5, 1fr); gap: 5px; margin: 20px 0; max-width: 400px; margin-left: auto; margin-right: auto; }
        .matriz input { padding: 8px; font-size: 14px; text-align: center; width: 50px; }
        .diagonal { background-color: #e8f5e8 !important; border: 2px solid #4CAF50 !important; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 20px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        .info { background: #e3f2fd; padding: 15px; margin: 15px 0; border-left: 4px solid #2196F3; }
        h4 { text-align: center; margin: 20px 0 10px 0; }
    </style>
</head>
<body>
    <h2>Exercício 19</h2>
    <p>Criar um algoritmo com uma matriz 5x5 e escrever os elementos da diagonal principal.</p>
    
    <div class="info">
        <strong>💡 Diagonal Principal:</strong> São os elementos onde linha = coluna<br>
        Posições: [0,0], [1,1], [2,2], [3,3], [4,4]
    </div>

    <form method="POST">
        <h4>Preencha a Matriz 5x5:</h4>
        <div class="matriz">
            <?php for ($i = 0; $i < 5; $i++): ?>
                <?php for ($j = 0; $j < 5; $j++): ?>
                    <input type="number" 
                           name="campo_<?= $i ?>_<?= $j ?>" 
                           <?= ($i == $j) ? 'class="diagonal"' : '' ?>
                           placeholder="<?= $i ?>,<?= $j ?>"
                           required>
                <?php endfor; ?>
            <?php endfor; ?>
        </div>
        <button type="submit">📊 Extrair Diagonal Principal</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>