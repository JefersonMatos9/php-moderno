<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
   $preco = $_GET['preco'] ?? 0;
   $reajuste = $_GET['reaj'] ?? 0;
    
    ?>
    
    <main>
        <form action="=" method="get">
        <h1>Reajustador de Preços</h1>
        <label for="preco">Preço do Produto R$</label>
        <input type="number" name="preco" id="preco" min="0" value="<?=$preco?>">
        <label for="reaj">Qual será o percentual de reajuste?(<strong><span id="p"></span>%</strong>) </label>
        <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">
        <input type="submit" value="Reajustar">

        </form>
    </main>

    <?php 
    $aumento = $preco * $reajuste/100;
    $novo = $preco + $aumento;
    
    ?>
    <section>
        <h2>Resultado do Reajuste</h2>
        <p>O produto que custava R$<?=$preco?>,com <strong><?=$reajuste?>% de aumento</strong> vai passar a custar <strong>R$<?=$novo?> </strong> a partir de agora.</p>
    </section>
    <script>
mudaValor()

        function mudaValor(){
     p.innerText =  reaj.value
        }
    </script>
</body>
</html>