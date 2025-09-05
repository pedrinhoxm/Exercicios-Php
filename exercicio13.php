<?php
$resultado = "";
$numeros = [];

if ($_POST) {
    if (isset($_POST['numero'])) {
        if (isset($_POST['numeros_digitados'])) {
            $numeros = json_decode($_POST['numeros_digitados'], true);
        }
        
        $numero = $_POST['numero'];
        
        if ($numero == 0) {
            $contador = 0;
            foreach ($numeros as $num) {
                if ($num >= 100 && $num <= 200) {
                    $contador++;
                }
            }
            
            $resultado = "
            Números digitados: " . implode(', ', $numeros) . "<br><br>
            <strong>Total de números entre 100 e 200: $contador</strong>
            ";
        } else {
            $numeros[] = $numero;
            
            $resultado = "
            Números digitados até agora: " . implode(', ', $numeros) . "<br>
            <em>Digite 0 para encerrar e ver o resultado</em>
            ";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 13</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 50px auto; padding: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
        .reset { text-align: center; margin: 10px 0; }
        .reset a { background: #ff9800; color: white; padding: 8px 15px; text-decoration: none; border-radius: 3px; }
    </style>
</head>
<body>
    <h2>Exercício 13</h2>
    <p>Ler vários números e informar quantos números entre 100 e 200 foram digitados. Digite 0 para encerrar.</p>

    <form method="POST">
        <input type="number" name="numero" placeholder="Digite um número (0 para encerrar)" required autofocus>
        <input type="hidden" name="numeros_digitados" value="<?= htmlspecialchars(json_encode($numeros)) ?>">
        <button type="submit">Adicionar Número</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="reset">
        <a href="exercicio13.php">🔄 Reiniciar</a>
    </div>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>