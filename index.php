<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <?php 
            require_once "Lutador.php";

            $lutador = array();

            $lutador[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9, 11, 3, 1);

            $lutador[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14, 2, 3);

            $lutador[2] = new Lutador("Snapshadow", "EUA", 35, 1.65, 80.9, 12, 2, 1);

            $lutador[3] = new Lutador("Dead Code", "Austrália", 28, 1.93, 81.6, 13, 0, 2);

            $lutador[4] = new Lutador("Brutamonte", "Brasil", 28, 2.11, 95.2, 52, 0, 0);

            $lutador[5] = new Lutador("Vanderley", "Bélgica", 32, 1.70, 82.6, 7, 20, 12);

            $lutador[0]->status();
            $lutador[1]->status();
            $lutador[2]->status();
            $lutador[3]->status();
            $lutador[4]->status();
            $lutador[5]->status();

            $lutador[4]->apresentar();
        ?>
</body>
</html>