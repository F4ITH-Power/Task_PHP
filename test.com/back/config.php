<?php

$servername = "localhost";
$database = "main";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}
    $news1 = $_POST['news1']; // создаем переменную , которая содержит переданные скрипту через HTTP метод POST данные (с ключом news1)
    $news11 = $_POST['news11']; // создаем переменную name, которая содержит переданные скрипту через HTTP метод POST данные (с ключом news11)
    echo $news1 . " " . $news11; // выводим текстовое содержимое (значение выше созданных переменных, перечисленных через запятую)
?>