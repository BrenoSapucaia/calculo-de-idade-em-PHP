<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    $atual= date("Y");
    $nasc= $_GET['nasc'] ?? 2000;
    $ano = $_GET['ano'] ?? $atual;
    ?>
    <main>
        <h1>Calculo de idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
        <label for="nasc">Em que ano vc nasceu</label>
        <input type="number" name="nasc" id="nasc" min="1900" max="<?=($atual-1)?>" value="<?= $nasc; ?>">
        <label for="ano">Quer saber sua idade em que ano?</label>
        <input type="number" name="ano" id="ano" min="1900" value="<?= $ano; ?>" >
        <input type="submit" value="Qual sera sua idade?">

        </form>
        
    </main>
    <section>
        <?php
            $idade = $atual - $nasc;
        
         ?>
        <h2>Resultados</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> Anos</strong> em <?=$ano?></p>
    </section>
</body>
</html>