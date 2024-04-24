<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do Processamento</h1>
    </header>
    <main>
        <?php
       $nome = $_GET["nome"] ?? " Digite seu nome";
       $sobrenome = $_GET["sobrenome"] ?? "e Sobrenome";$idade = $_GET["idade"] ?? "idade não informada";
       echo "<p>Seja Bem-Vindo ao meu site,<strong>$nome $sobrenome você tem $idade anos </strong>."
        ?>
       <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>"
    </main>
    
</body>
</html>