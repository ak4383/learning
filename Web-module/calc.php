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
    <script>
        function plus() {
            var x, y, z;
            x = parseInt(document.getElementById("num1").value);
            y = parseInt(document.getElementById("num2").value);
            z = x + y;
            document.getElementById("num3").value = z;
        }
        function minus() {
            var x, y, z;
            x = parseInt(document.getElementById("num1").value);
            y = parseInt(document.getElementById("num2").value);
            z = x - y;
            document.getElementById("num3").value = z;
        }
    </script>
</head>

<body>
    <a href = "index1.html">Yankee go home</a> <br />
    <h1>Калькулятор на чистом JS</h1>
    <input type="text" id="num1" /> <br />
    <input type="text" id="num2" /> <br />
    <button onclick="plus();">+</button>
    <button onclick="minus();">-</button> <br />
    <input type="text" id="num3" /> <br />
</body>
</html>