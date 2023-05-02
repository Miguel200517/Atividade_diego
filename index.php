<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Exemplo Encapsulamento</title>
</head>
<body>
    <?php
        include("ContaBancaria.php");

        $p1 = new ContaBancaria("Marcos", 32423, 10000);

        $depositar = $p1 -> depositar(1000);

        echo "$depositar";

    ?>
</body>
</html>