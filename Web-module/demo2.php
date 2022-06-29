<html>
    <head>
        <title>Demon</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Hello from CHAOS</h1>
        <?php

        $x = 2;
        $y = 3;
        $z = $x + $y;
        echo "<h2>Это все, что останется: $z</h2>";

        date_default_timezone_set('Europe/Moscow');
        $now = date("H:i:s");
        echo "<h3>Время победы Тзинча: $now</h3>";

        ?>

        <form action="doubler.php">
            <input name="num" />
            <button>Сколько душ ты мне принесешь? Я отдам вдвое больше, обещаю...</button>
        </form>

    </body>
</html>