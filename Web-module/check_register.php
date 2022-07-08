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
<h1>New souls! We will redirect you.</h1>
<meta http-equiv="refresh" content="5; url=login.php"/>
    <?php
        $user = $_REQUEST["txtUser"];
        $pwd = $_REQUEST["txtPwd"];
        $hash = hash('sha256', $pwd);

        $email = $_REQUEST["email"];
        $login = $_REQUEST["login"];

    /* Ниже идет запрос к базе, в регистрации нужно делать запись */
    $sql = "INSERT INTO users (username, email, login, pwdhash) 
    VALUES (?, ?, ?, ?)";

    /* Задаем переменные через переменные среды, чтобы не хардкодить креды базы данных */
    $db_server=getenv('cyb3_db_server');
    $db_user=getenv('cyb3_db_user');
    $db_pwd=trim(getenv('cyb3_db_pwd'));
    $conn = mysqli_connect($db_server,$db_user,$db_pwd,"cyb3");

    /* Здесь мы безопасно передаем данные. ss - это сокращение типа переменных, string string */
    $stat = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stat, "ssss", $user, $usermail, $userlogin, $hash);
    mysqli_stmt_execute($stat);
    /* Записываем результат в переменную */
    $result = mysqli_stmt_get_result($stat);

    /* */
    /*        $result = mysqli_query($conn, $sql); */
    /*        var_dump(mysqli_num_rows($result)); */
/* $num_rows = mysqli_num_rows($result); */
 /*mysqli_close($conn); */
?>
</body>
</html>
