<?php
$resultado = "";

if ($_POST) {
    $numero = $_POST['numero'];
    
    if ($numero % 10 == 0) {
        $resultado = "O número $numero é divisível por 10";
    } elseif ($numero % 5 == 0) {
        $resultado = "O número $numero é divisível por 5";
    } elseif ($numero % 2 == 0) {
        $resultado = "O número $numero é divisível por 2";
    } else {
        $resultado = "O número $numero não é divisível por 10, 5 ou 2";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 2</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 2</h2>
    <p>Verificar se um número é divisível por 10, por 5, por 2 ou por nenhum destes.</p>

    <form method="POST">
        <input type="number" name="numero" placeholder="Digite um número" required>
        <button type="submit">Verificar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>