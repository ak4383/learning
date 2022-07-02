<html>
<head>
    <title>Login</title>
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
    <h1 id="hdr1">Для внесения душ нужно сначала отдать свою:</h1>

        <form action="check_login.php" method="POST" >
            <input type="text" name="txtUser" /> <br />
            <input type="password" name="txtPwd" /> <br />
            <input type="submit" value="Take my soul" />

        </form>

<!-- В поле логина достаточно подставить ' or 1=1; -- и вход произойдет -->

</body>
</html>