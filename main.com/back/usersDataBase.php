<link rel='stylesheet' href='/front/style.css'>
<?php
$servername = "localhost";
$database = "main";
$username = "root";
$password = "";
// Устанавливаем соединение
$conn = mysqli_connect($servername, $username, $password, $database);
// Проверяем соединение

$login = $_GET['userName'];
$password = $_GET['userPassword'];

$sql = "INSERT INTO user (user, password) VALUES ('$login', '$password')";
mysqli_query($conn, $sql);
mysqli_close($conn);
?>