<?php
$resultado = "";


$massaInicial = 1;  
$massa = $massaInicial;
$tempo = 0;  
$perdaPorcentual = 0.25;  

while ($massa >= 0.10) {
    $tempo += 30;  
    $massa = $massa * (1 - $perdaPorcentual);  
}

$minutos = floor($tempo / 60);
$segundos = $tempo % 60;

$resultado = "
<h3>Simulação do Decaimento Radioativo:</h3>

<strong>Dados do problema:</strong><br>
• Massa inicial: {$massaInicial}kg<br>
• Perde 25% da massa a cada 30 segundos<br>
• Meta: massa menor que 0,10kg<br><br>

<strong>Resultado:</strong><br>
Tempo necessário: <span style='color: #ff5722; font-size: 18px; font-weight: bold;'>$tempo segundos</span><br>
Ou seja: <strong>$minutos minutos e $segundos segundos</strong><br><br>

<strong>Massa final:</strong> " . number_format($massa, 6) . "kg<br>
<strong>Reduziu para:</strong> " . number_format(($massa / $massaInicial) * 100, 4) . "% da massa original
";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 15</title>
    <style>
        body { font-family: Arial; max-width: 600px; margin: 50px auto; padding: 20px; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #ff5722; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 20px; margin: 20px 0; line-height: 1.6; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        .dados { background: #fff3e0; padding: 15px; margin: 15px 0; border-left: 4px solid #ff5722; }
        .radioativo { color: #ff5722; font-weight: bold; }
    </style>
</head>
<body>
    <h2>Exercício 15</h2>
    <p>Calcular o tempo necessário para a massa de material radioativo ficar menor que 0,10.</p>
    
    <div class="dados">
        <strong>☢️ Material Radioativo - Usina de Angra:</strong><br>
        • Material perde <span class="radioativo">25%</span> da massa a cada <span class="radioativo">30 segundos</span><br>
        • Objetivo: descobrir quando massa < <span class="radioativo">0,10</span><br>
        • Processo: decaimento exponencial
    </div>

    <div class="resultado"><?= $resultado ?></div>
    
    <form method="POST">
        <button type="submit">🔄 Recalcular</button>
    </form>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>