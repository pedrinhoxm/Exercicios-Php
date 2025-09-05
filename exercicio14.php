<?php
$resultado = "";

$alturaChico = 150;  
$alturaJuca = 110;   

$crescimentoChico = 2; 
$crescimentoJuca = 3;   

$anos = 0;

while ($alturaJuca <= $alturaChico) {
    $anos++;
    $alturaChico += $crescimentoChico;
    $alturaJuca += $crescimentoJuca;
}

$alturaChicoFinal = $alturaChico / 100;
$alturaJucaFinal = $alturaJuca / 100;

$resultado = "
<h3>Resultado do Cálculo:</h3>

<strong>Situação inicial:</strong><br>
Chico: 1,50m (cresce 2cm/ano)<br>
Juca: 1,10m (cresce 3cm/ano)<br><br>

<strong>Após $anos anos:</strong><br>
Chico: {$alturaChicoFinal}m<br>
Juca: {$alturaJucaFinal}m<br><br>

<strong>Resposta:</strong><br>
Juca será maior que Chico em <span style='color: #4CAF50; font-size: 18px; font-weight: bold;'>$anos anos</span>
";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 14</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 50px auto; padding: 20px; }
        button { padding: 12px; margin: 20px 0; width: 100%; font-size: 16px; background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 20px; margin: 20px 0; line-height: 1.6; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        .dados { background: #e3f2fd; padding: 15px; margin: 15px 0; border-left: 4px solid #2196F3; }
    </style>
</head>
<body>
    <h2>Exercício 14</h2>
    <p>Calcular em quantos anos Juca será maior que Chico.</p>
    
    <div class="dados">
        <strong>📊 Dados do problema:</strong><br>
        • Chico: 1,50m inicial, cresce 2cm/ano<br>
        • Juca: 1,10m inicial, cresce 3cm/ano<br>
        • Pergunta: Em quantos anos Juca ficará mais alto?
    </div>

    <form method="POST">
        <button type="submit">🔄 Recalcular</button>
    </form>

    <div class="resultado"><?= $resultado ?></div>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>