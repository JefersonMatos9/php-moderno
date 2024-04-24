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
    $salMin = 1_380.00;
    $salario = $_GET["s1"] ?? $salMin;
    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?= $_SERVER['PHP_SELF']?>"method="get">
            <label for="s1">Salario(R$)</label>
            <input type="number" name="s1" id="s1" value="<?=$salario?>" step="0.01">

       <p>Considerando o salario minimo de <strong>R$<?=number_format($salMin,2,",",".")?></strong></p>
            <input type="submit"value="Calcular">
       </form>
    </main>
    <section>
        <h2>Resultado Final</h2>
        <?php 
        $total = intdiv($salario, $salMin);
        $resto = $salario % $salMin; 

        echo "Quem recebe um salário de $salario ganha <strong>$total salários mínimos</strong> + R$$resto "
        ?>
    </section>
</body>
</html>