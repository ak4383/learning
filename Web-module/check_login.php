<?php
    session_start();
?>
<!DOCTYPE html>
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

/*        $sql = "SELECT * FROM users WHERE Login='$user' AND PwdHash='$hash' "; */
        /* Ниже идет запрос к базе, в регистрации нужно делать запись */
        $sql = "SELECT * FROM users WHERE Login=? AND PwdHash=? ";
        /* Задаем переменные через переменные среды, чтобы не хардкодить креды базы данных */
        $db_server = "localhost:3306";
        $db_user = "root";
        $db_pwd = trim("");

        $conn = mysqli_connect($db_server,$db_user,$db_pwd, "cyb3");
        /* Здесь мы безопасно передаем данные. ss - это сокращение типа переменных, string string */
        $stat = mysqli_prepare($conn, $sql);
        mysqli_stmt_bind_param($stat, "ss", $user, $hash);
        mysqli_stmt_execute($stat);
        /* Записываем результат в переменную */
        $result = mysqli_stmt_get_result($stat);

        /* */
/*        $result = mysqli_query($conn, $sql); */
/*        var_dump(mysqli_num_rows($result)); */
        $num_rows = mysqli_num_rows($result);
        mysqli_close($conn);

echo "getenv($cyb3_db_server)";
echo "getenv($cyb3_db_user)";
echo "getenv($cyb3_db_pwd)";

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
