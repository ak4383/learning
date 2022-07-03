<html>
<head>
    <title>Register</title>
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
    <h1 id="hdr1">Регистрация нового пользователя</h1>

        <form action="check_register.php" method="POST" >
            <h2 id="hdr2">Ваше имя</h1>
            <input type="text" name="txtUser" /> <br />
            <input type="text" name="email" /> <br />
            <input type="text" name="login" /> <br />
            <input type="password" name="txtPwd" /> <br />
            <input type="submit" value="Register" />

        </form>

    <p style="position:absolute;right:0;bottom:0;margin-bottom:0">Автор: Артем Ключников</p>



</body>
</html>