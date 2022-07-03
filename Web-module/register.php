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
            Ваше имя:
            <input type="text" name="txtUser" /> <br />
            <p>Ваш email:</p>
            <input type="text" name="email" /> <br />
            <p>Ваш login:</p>
            <input type="text" name="login" /> <br />
            <p>Ваш пароль:</p>
            <input type="password" name="txtPwd" /> <br />
            <input type="submit" value="Register" />

        </form>

    <p style="position:absolute;right:0;bottom:0;margin-bottom:0">Автор: Артем Ключников</p>



</body>
</html>