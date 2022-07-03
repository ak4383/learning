<?php

$numbers = [1, 2, 3, 44, 5];
foreach($numbers as $x) {
    echo "$x<br />";
}

$people = [
    ["Yuri", "Moscow"],
    ["Eugeny", "Kaliningrad"],
    ["Alexey", "London"],
    ["Daniil", "Moscow"]
];

$i = 1;
foreach($people as $person) {
    $name = $person[0];
    $city = $person[1];
    echo("$i. $name from $city <br />");
    $i = $i = 1;
}