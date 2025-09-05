<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercícios PHP - Lista de Atividades </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            border-bottom: 10px;
            padding-bottom: 10px;
        }
        .exercise-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 15px;
            margin-top: 30px;
        }
        .exercise-card {
            background-color: #f8f9fa;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 15px;;
            transition: trasnform 0.2s, box-shadow 0.2s;
        }
        .exercise-card:hover {
            transform: traslateY(-2px);
            box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        }
        .exercise-link {
            text-decoration: none;
            color: #333;
            display: block;
        }
        .exercise-number {
            font-size: 18px;
            font-weight: bold;
            color: #4CAF50;
            margin-bottom: 8px;
        }
        .exercise-description {
            font-size: 14px;
            color: #666;
            line-height: 1.4;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1>📚 Lista de Exercícios PHP</h1>
        <p style="text-align: center; color: #666; font-size: 16px;">
            Clique em qualquer exercício para acessar sua solução
        </p>
        
        <div class="exercise-grid">
            <div class="exercise-card">
                <a href="exercicio01.php" class="exercise-link">
                    <div class="exercise-number">Exercício 1</div>
                    <div class="exercise-description">
                        Ler 2 números, somar e aplicar regra: se soma > 20, adicionar 8; se ≤ 20, subtrair 5
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio02.php" class="exercise-link">
                    <div class="exercise-number">Exercício 2</div>
                    <div class="exercise-description">
                        Verificar se um número é divisível por 10, 5, 2 ou por nenhum destes
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio03.php" class="exercise-link">
                    <div class="exercise-number">Exercício 3</div>
                    <div class="exercise-description">
                        Verificar se pessoa (nome, sexo, idade) é aceita: feminino e < 25 anos
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio04.php" class="exercise-link">
                    <div class="exercise-number">Exercício 4</div>
                    <div class="exercise-description">
                        Ordenar e imprimir 3 números em ordem decrescente
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio05.php" class="exercise-link">
                    <div class="exercise-number">Exercício 5</div>
                    <div class="exercise-description">
                        Classificar triângulo de acordo com o tamanho dos lados
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio06.php" class="exercise-link">
                    <div class="exercise-number">Exercício 6</div>
                    <div class="exercise-description">
                        Converter número (1-12) para o mês correspondente
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio07.php" class="exercise-link">
                    <div class="exercise-number">Exercício 7</div>
                    <div class="exercise-description">
                        Sistema de empréstimo de livros (professor: 10 dias, aluno: 3 dias)
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio08.php" class="exercise-link">
                    <div class="exercise-number">Exercício 8</div>
                    <div class="exercise-description">
                        Imprimir números de 1 até N e calcular seu produto
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio09.php" class="exercise-link">
                    <div class="exercise-number">Exercício 9</div>
                    <div class="exercise-description">
                        Imprimir a palavra "SOL" N vezes
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio10.php" class="exercise-link">
                    <div class="exercise-number">Exercício 10</div>
                    <div class="exercise-description">
                        Ler 20 números: somar positivos e contar negativos
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio11.php" class="exercise-link">
                    <div class="exercise-number">Exercício 11</div>
                    <div class="exercise-description">
                        Gerar e imprimir a tabuada de um número
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio12.php" class="exercise-link">
                    <div class="exercise-number">Exercício 12</div>
                    <div class="exercise-description">
                        Imprimir palavra em formato de pirâmide
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio13.php" class="exercise-link">
                    <div class="exercise-number">Exercício 13</div>
                    <div class="exercise-description">
                        Contar números entre 100 e 200 (parar quando digitar 0)
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio14.php" class="exercise-link">
                    <div class="exercise-number">Exercício 14</div>
                    <div class="exercise-description">
                        Calcular em quantos anos Juca será maior que Chico
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio15.php" class="exercise-link">
                    <div class="exercise-number">Exercício 15</div>
                    <div class="exercise-description">
                        Calcular tempo para massa radioativa ficar menor que 0.10
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio16.php" class="exercise-link">
                    <div class="exercise-number">Exercício 16</div>
                    <div class="exercise-description">
                        Vetor com 15 números: verificar se cada um é par ou ímpar
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio17.php" class="exercise-link">
                    <div class="exercise-number">Exercício 17</div>
                    <div class="exercise-description">
                        Vetor com 20 números: maior, menor, % pares e média
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio18.php" class="exercise-link">
                    <div class="exercise-number">Exercício 18</div>
                    <div class="exercise-description">
                        Comparar 2 vetores e gerar vetor com números não comuns
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio19.php" class="exercise-link">
                    <div class="exercise-number">Exercício 19</div>
                    <div class="exercise-description">
                        Matriz 5x5: imprimir elementos da diagonal principal
                    </div>
                </a>
            </div>
            
            <div class="exercise-card">
                <a href="exercicio20.php" class="exercise-link">
                    <div class="exercise-number">Exercício 20</div>
                    <div class="exercise-description">
                        Matriz 5x5: imprimir matriz completa, só pares e só ímpares
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>