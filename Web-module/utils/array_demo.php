<?php

$people2 = [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "Vasya", "LastName" => "Pupkin", "City" => "Moscow", "Salary" => 77777),
    array("FirstName" => "Masha", "LastName" => "Mashkina", "City" => "London", "Salary" => 300000)
];

foreach($people2 as $person2) {
    echo $person2['FirstName']." ".$person2['LastName']." ".$person2['City']." ".$person2['Salary'];
}

?>