<?php

$nome = $_GET["nome"];
$cognome = $_GET["cognome"];

$nomeCompleto = $nome + $cognome;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p>Ciao <?= $nome ?></p>
    
</body>
</html>