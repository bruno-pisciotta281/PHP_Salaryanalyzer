<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Analisador de Salários</title>
</head>
<body>
    <?php 
        $minimo = 1380.60;
        $salario = $_GET["sal"] ?? 1;
    ?>
    <main>
        <h1>Analisador de Salários</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="sal">Indique o valor do seu Salário</label>
            <input type="number" name="sal" id="sal" value="<?=$salario?>" step="0.001">
            <p>Considerando o sálario mínimo atual: (R$) <strong><?= number_format($minimo, 2, ",", ".")?></strong></p>
            <input type="submit" value="Calcular!">
        </form>
    </main>
    <section>
        <h2>Resultado</h2>
        <?php 
            $total = intdiv($salario, $minimo);
            $diferença = $salario % $minimo;
            echo "<p>Você ganha um total de $total salários mínimos + <strong>R\$ ".number_format($diferença, 2, ",", ".") ." </strong></p>";
        ?>
    </section>
</body>
</html>