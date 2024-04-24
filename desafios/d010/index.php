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
        $anoAtual = date('Y');
        $anoNasc = $_GET['nasc'] ?? 0;
        $ano = $_GET['ano'] ?? $anoAtual;
        
    ?>
    <main>
        <h1>Calculando sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="nasc">Em que ano você nasceu?</label>
        <input type="number" name="nasc" id="nasc" value="<?=$anoNasc?>" max="<?=($anoAtual)?>" >
        <label for="ano">Quer saber sua idade em que ano? atualmente estamos em <strong><?=$anoAtual?></strong></label>
        <input type="number" name="ano" id="ano" value="<?=$ano?>">
        <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section>
        <?php 
        $idade = $ano - $anoNasc; 
        echo "<h2>Resultado</h2>";
        if($idade <=1){
        echo "<p>Quem nasceu em $anoNasc vai ter <strong>$idade ano</strong> em $anoAtual </p>";
        }else {
        echo"<p>Quem nasceu em $anoNasc vai ter <strong>$idade anos</strong> em $anoAtual </p>";
        }
?>
    </section>
</body>
</html>