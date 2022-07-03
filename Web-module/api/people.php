<?php

//симуляция - обычно список данных извлекается кодом из БД
$people = [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "Vasya", "LastName" => "Pupkin", "City" => "Moscow", "Salary" => 77777),
    array("FirstName" => "Masha", "LastName" => "Mashkina", "City" => "London", "Salary" => 300000),
    array("FirstName" => "Ivan", "LastName" => "Andreev", "City" => "London", "Salary" => 300000)
];

// Отправим извлеченные данные в формате json (сериализация)
echo json_encode($people);