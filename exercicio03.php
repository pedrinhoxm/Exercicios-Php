<?php
$resultado = "";

if ($_POST) {
    $nome = $_POST['nome'];
    $sexo = $_POST['sexo'];
    $idade = $_POST['idade'];
    
    if ($sexo == 'F' && $idade < 25) {
        $resultado = "$nome - ACEITA";
    } else {
        $resultado = "$nome - NÃO ACEITA";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 3</title>
    <style>
        body { font-family: Arial; max-width: 400px; margin: 50px auto; padding: 20px; }
        input, select, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 3</h2>
    <p>Verificar se pessoa é aceita: feminino e menor que 25 anos.</p>
    
    <form method="POST">
        <input type="text" name="nome" placeholder="Digite o nome" required>
        <select name="sexo" required>
            <option value="">Selecione o sexo</option>
            <option value="F">Feminino</option>
            <option value="M">Masculino</option>
        </select>
        <input type="number" name="idade" placeholder="Digite a idade" required>
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