<?php
    session_start();
?>
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

        $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash' ";

        $conn = mysqli_connect("localhost:3306", "root", "", "cyb3");
        $result = mysqli_query($conn, $sql);
        //var_dump(mysqli_num_rows($result));
        $num_rows = mysqli_num_rows($result);
        mysqli_close($conn);

        if ($num_rows >= 1) {
            echo "<h1>Тзинч забрал вашу душу, $user</h1>";
            $_SESSION["user"] = $user;
        }
        else {
            echo "<h1>Неверный логин!</h1>";
        }
    ?>

</body>
</html>
