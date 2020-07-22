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
            $lutadora = array();

            $lutadora[0] = new Lutador("Stephanie", "Brasil", "F", 22, 1.69, 60.9, 15, 1, 0);
            $lutador[0] = new Lutador("Pretty Boy", "França", "M", 31, 1.75, 68.9, 11, 3, 1);

            $lutadora[1] = new Lutador("Eloy", "EUA", "F", 25, 1.70, 70.2, 12, 3, 2);
            $lutador[1] = new Lutador("Putscript", "Brasil", "M", 29, 1.68, 57.8, 14, 2, 3);

            $lutadora[2] = new Lutador("Elien", "Cánada", "F", 23, 1.75, 70.4, 17, 2, 4);
            $lutador[2] = new Lutador("Snapshadow", "EUA", "M", 35, 1.65, 80.9, 12, 2, 1);

            $lutadora[3] = new Lutador("Abby", "Cánada", "F", 26, 1.85, 95.8, 30, 1, 0);
            $lutador[3] = new Lutador("Dead Code", "Austrália", "M", 28, 1.93, 81.6, 13, 0, 2);

            $lutadora[4] = new Lutador("Mia Kalifa", "EUA", "F", 26, 1.72, 63.1, 10, 0, 0);
            $lutador[4] = new Lutador("Brutamonte", "Brasil", "M", 28, 2.11, 119.2, 52, 0, 0);

            $lutadora[5] = new Lutador("Sarah", "Japão", "F", 36, 2.11, 108.4, 40, 3, 4);
            $lutador[5] = new Lutador("Vanderley", "Bélgica", "M", 32, 1.70, 105.7, 7, 20, 12);

            $UEC01 = new Luta;
            echo "<h3>Luta Masculina</h3>";
            $UEC01->marcarLuta($lutador[5], $lutador[4]);
            $UEC01->lutar();


            $lutador[4]->status();
            $lutador[5]->status();

            echo "<hr>";

            $UEC02 = new Luta;
            echo "<h3>Luta Feminina</h3>";

            $UEC02->marcarLuta($lutadora[0], $lutadora[4]);
            $UEC02->lutar();
            $lutadora[0]->status();
            $lutadora[4]->status();
        ?>
</body>
</html>