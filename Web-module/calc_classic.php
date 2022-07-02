<html>
<head>
    <title>Calc</title>
    <meta charset="utf-8">

    <style>
        input, button {
            margin: 6px;
        }

        button {
            width: 65px;
        }
    </style>

</head>

<body>
    <a href = "index1.html">Yankee go home</a> <br />
    <h1>Калькулятор на классическом PHP</h1>
    <?php
        $x = $_REQUEST["num1"];
        $y = $_REQUEST["num2"];
        $z = $x + $y;
    ?>
    <form>
    <input type="text" name="num1" /> <br />
    <input type="text" name="num2" /> <br />
    <button>+</button>
    <button>-</button> <br />
    </form>
    <input type="text" value="<?=$z?>"/>
</body>
</html>