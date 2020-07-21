<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <header>
            <h1>Lutas dos Emojs</h1>
        </header>
        <?php 
            require_once "Lutador.php";
            require_once "Luta.php";

            $lutador = array();

            $lutador[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);

            $lutador[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

            $lutador[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

            $lutador[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

            $lutador[4] = new Lutador("Brutamonte", "Brasil", 28, 2.11, 119.3, 52, 0, 0);

            $lutador[5] = new Lutador("Vanderley", "Bélgica", 32, 1.70, 105.7, 7, 20, 12);

            $UEC01 = new Luta;
            $UEC01->marcarLuta($lutador[5], $lutador[4]);
            $UEC01->lutar();

        ?>
</body>
</html>