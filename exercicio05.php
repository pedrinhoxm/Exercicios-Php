<?php 
$resultado = "";

if ($_POST) {
    $lado1 = $_POST['lado1'];
    $lado2 = $_POST['lado2'];
    $lado3 = $_POST['lado3'];

    if (($lado1 + $lado2 > $lado3) && ($lado1 + $lado3 > $lado2) && ($lado2 + $lado3 > $lado1)) {

        if($lado1 == $lado2 && $lado2 == $lado3) {
            $resultado = "Triângulo EQUILATERO";
        }

        elseif ($lado1 == $lado2 || $lado1 == $lado3 || $lado2 == $lado3) {
            $resultado = "Triângulo ISÓSCELES";
        }

        else {
            $resultado = "Triângulo ESCALENO";
        }
    } else {
        $resultado = "Os valores não formam um triângulo";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 5</title>
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
    <h2>Exercício 5</h2>
    <p>Classificar triângulo de acordo com o tamanho dos lados.</p>

    <form method="POST">
        <input type="number" name="lado1" placeholder="Primeiro lado" required>
        <input type="number" name="lado2" placeholder="Segundo lado" required>
        <input type="number" name="lado3" placeholder="Terceiro lado" required>
        <button type="submit">Classificar</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>