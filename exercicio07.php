<?php
$resultado = "";

if ($_POST) {
    $livro = $_POST['livro'];
    $tipo = $_POST['tipo'];

    $dataEmprestimo = date('d/m/Y');

    if ($tipo == 'professor') {
        $diasEmprestimo = 10;
        $dataDevolucao = date('d/m/Y', strtotime('+10 days'));

    } else {
        $diasEmprestimo = 3;
        $dataDevolucao = date('d/m/Y', strtotime('+3 days'));

    }

    $resultado = "
     ========== RECIBO DE EMPRÉSTIMO ==========<br>
    Livro: $livro<br>
    Tipo de usuário: " . ucfirst($tipo) . "<br>
    Data do empréstimo: $dataEmprestimo<br>
    Data de devolução: $dataDevolucao<br>
    Prazo: $diasEmprestimo dias<br>
    ========================================  
    ";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 7</title>
    <style>
        body { font-family: Arial; max-width: 500px; margin: 50px auto; padding: 20px; }
        input, select, button { padding: 10px; margin: 5px 0; width: 100%; font-size: 16px; }
        button { background: #4CAF50; color: white; border: none; cursor: pointer; }
        .resultado { background: #f0f0f0; padding: 15px; margin: 20px 0; font-family: monospace; white-space: pre-line; }
        .voltar { text-align: center; margin-top: 20px; }
        .voltar a { background: #2196F3; color: white; padding: 10px 20px; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Exercício 7</h2>
    <p>Sistema de empréstimo de livros da biblioteca universitária.<br>
    Professor: 10 dias | Aluno: 3 dias</p>

    <form method="POST">
        <input type="text" name="livro" placeholder="Nome do livro" required>
        <select name="tipo" required>
            <option value="">Selecione o tipo de usuário</option>
            <option value="professor">Professor</option>
            <option value="aluno">Aluno</option>
        </select>
        <button type="submit">Gerar Recibo</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>