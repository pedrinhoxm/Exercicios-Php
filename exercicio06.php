<?php
$resultado = "";

if ($_POST) {
    $numero = $_POST['numero'];

    switch($numero) {
        case 1:
            $resultado = "Janeiro";
            break;

            case 2:
                $resultado = "Fevereiro";
                break;
            
             case 3:
                $resultado = "Março";
                 break;  
                 
            case 4:
                $resultado = "Abril";
                break;  
                
            case 5:
                 $resultado = "Maio";
                 break;    

            case 6:
                $resultado = "Junho";
                break;  
                
            case 7:
                 $resultado = "Julho";
                 break;    

            case 8:
                $resultado = "Agosto";
                break; 

            case 9:
                $resultado = "Setembro";
            break;      

            case 10:
                $resultado = "Outubro";
                break;

             case 11:
                 $resultado = "Novembro";
                break;

             case 12:
                 $resultado = "Dezembro";
                break;

            default:
              $resultado = "Não existe mês com este número";
              break;    
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Exercício 6</title>
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
    <h2>Exercício 6</h2>
    <p>Ler um número entre 1 e 12 e escrever o mês correspondente.</p>

    <form method="POST">
        <input type="number" name="numero" min="1" max="12" placeholder="Digite um número (1-12)" required>
        <button type="submit">Converter</button>
    </form>

    <?php if ($resultado): ?>
        <div class="resultado"><?= $resultado ?></div>
    <?php endif; ?>
    
    <div class="voltar">
        <a href="index.php">← Voltar</a>
    </div>
</body>
</html>