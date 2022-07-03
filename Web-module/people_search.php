<!DOCTYPE html>
<html lang="en">
<head>
    <title>Поиск по людям</title>
    <meta charset="utf-8">

    <script>
        function search() {
            alert(document.getElementById("letters").value);
        }
    </script>

</head>

<body>
    <h1>Поиск по людям</h1>
    Введите первые буквы фамилии человека:
    <input type="text" id="letters" oninput="search();"/>

</body>
</html>