<html>
<head>
    <title>Checking</title>
    <meta charset="utf-8">
        <style>
            input {
                width: 100px;
                margin: 5px;
            }
    </style>
</head>

<body>
    <a href = "index1.html">Yankee go home</a> <br />
    <?php
        $user = $_REQUEST["txtUser"];
        $pwd = $_REQUEST["txtPwd"];
        $hash = hash('sha256', $pwd);

        $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash'";

        $conn = mysqli_connect("localhost:3306", "root", "", "cyb3");



        if ($pwd == "123456") {
        echo "<h1>Тзинч забрал вашу душу, $user</h1>";
        }
        else {
            echo "<h1>Неверный логин!</h1>";
        }
    ?>

</body>
</html>
