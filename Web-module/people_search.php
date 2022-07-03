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
                var people = JSON.parse(result);
                var out = "";

                for(var i=0; i < people.length; i++) {
                    var person = people[i];
                    var firstName = person["FirstName"];
                    var lastName = person["LastName"];
                    var city = person["City"];
                    var text = lastName + ", " + firstName + " from " + city + "<br />";
                    out = out + text;
                }
                document.getElementById("display").innerHTML = out;

            };
            xhr.send();
        }
    </script>

</head>

<body>
    <a href = "index1.html">Yankee go home</a> <br />
    <h1>Поиск по людям</h1>
    Введите первые буквы фамилии человека:
    <input type="text" id="letters" oninput="search();"/>
    <div id="display"></div>

</body>
</html>