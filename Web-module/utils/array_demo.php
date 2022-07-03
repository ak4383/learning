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
    $i = $i + 1;
}

$person1 = array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456);
echo $person1['FirstName']." ".$person1['LastName']." ".$person1['City']." ".$person1['Salary'];

$people2 [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "Vasya", "LastName" => "Pupkin", "City" => "Moscow", "Salary" => 77777),
    array("FirstName" => "Masha", "LastName" => "Mashkina", "City" => "London", "Salary" => 300000)
];

foreach($people2 as $person2) {
    echo $person2['FirstName']." ".$person2['LastName']." ".$person2['City']." ".$person2['Salary'];
}