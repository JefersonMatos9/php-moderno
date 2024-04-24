<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
    <style>
        img.nota{
            height: 50px;
            margin: 5px;
        }
    </style>
</head>
<body>
    <?php 
    $saque = $_GET['caixa'] ?? 0;
    ?>
    <main>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <h1>Caixa Eletrônico</h1>
        <label for="caixa">Qual valor você deseja sacar?(R$)</label>
        <input type="number" name="caixa" id="caixa" step="5" required value="<?=$saque?>"> 
        <input type="submit" value="Sacar">
        <p>*Notas disponiveis: R$100,R$50,R$10 e R$5.</p>

        </form>
    </main>
    <?php 
    $resto = $saque;
    $tot100 = (int)($resto/100);
    $resto = $resto % 100;
    $tot50 = (int)($resto/50);
    $resto = $resto % 50;
    $tot10 = (int)($resto / 10);
    $resto = $resto % 10;
    $tot5 = (int)($resto/5);
    $resto = $resto % 5;
    ?>
    <section>
        <h2>Saque de R$<?=number_format($saque,2,",",".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>


    <ul>
        <li><img src="imagens/100-reais.jpg" alt="Nota de 100" class="nota"> x<?=$tot100?></li>
        <li><img src="imagens/50-reais.jpg" alt="Nota de 50" class="nota">  x<?=$tot50?></li>
        <li><img src="imagens/10-reais.jpg" alt="Nota de 10" class="nota">  x<?=$tot10?></li>
        <li><img src="imagens/5-reais.jpg" alt="Nota de 5" class="nota">  x<?=$tot5?></li>
        
       
    </ul>
        
    </section>
</body>
</html>