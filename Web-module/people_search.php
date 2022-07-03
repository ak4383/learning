<!DOCTYPE html>
<html lang="en">
<head>
    <title>Поиск по людям</title>
    <meta charset="utf-8">

    <script>
        function search() {
            var letters = document.getElementById("letters").value;
            var url = "api/people.php?letters=" + letters;
            var xhr = new XMLHttpRequest();
            xhr.open("GET", url);
            xhr.onload = function() {
                var result = xhr.responseText;

                /* Десериализация (из текста в объект) */
                var people =  JSON.parse(result);
                alert(people);

            };
            xhr.send();
        }
    </script>

</head>

<body>
    <h1>Поиск по людям</h1>
    Введите первые буквы фамилии человека:
    <input type="text" id="letters" oninput="search();"/>

</body>
</html>