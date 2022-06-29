<html>
    <head>
        <title>Demo PHP</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Hello from PHP</h1>
        <?php

        $x = 2;
        $y = 3;
        $z = $x + $y;
        echo "<h2>Это все, что останется: $z</h2>";

        $now = date("H:i:s");
        echo "<h3>Время победы Тзинча: $now</h3>";

        ?>
    </body>
</html>