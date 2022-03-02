<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>News</title>
</head>
<?php
require('config.php');
global $conn;
$query_select = 'SELECT * FROM suggestnews LIMIT 5';

$result = $conn->query($query_select) ;
if ($result->num_rows > 0)
{
    // output data of each row
    while($row = $result->fetch_assoc())
    {
        echo "Новость"." ". $row["id"] .":". $row["title"] ."|". $row["text"] . "<br>";
    }
}
else
{
    echo "0 results";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
</head>
<body>
<form id = "NewsButton">
    <p>
        <button id = "button1" type="button">1</button>
        <button id = "button2" type="button">2</button>
        <button id = "button3" type="button">3</button>
        <button id = "button4" type="button">4</button>
        <button id = "button5" type="button">5</button>
        <button id = "button6" type="button">6</button>
        <button id = "button7" type="button">7</button>
        <button id = "button8" type="button">8</button>
        <button id = "button9" type="button">9</button>
        <button id = "buttonNext" type="button"> >> </button>
    </p>
</form>
<script>
    $( document ).ready(function()
    {
        $( "#button1" ).click(function()
        { // задаем функцию при нажатиии на элемент <button>
            $.ajax(
                {
                method: "POST", // метод HTTP, используемый для запроса
                url: "config.php", // строка, содержащая URL адрес, на который отправляется запрос
                data:
                    { // данные, которые будут отправлены на сервер
                    news1: "Test",
                    news11: "Test1"
                },
                success: [function ( msg )
                { // функции обратного вызова, которые вызываются если AJAX запрос выполнится успешно (если несколько функций, то необходимо помещать их в массив)
                    $( "p" ).text( "User saved: " + msg ); // добавляем текстовую информацию и данные возвращенные с сервера
                },
                    function ()
                    { // вызов второй функции из массива
                        console.log( "next function" );
                    }],
                statusCode:
                    {
                    200: function ()
                    { // выполнить функцию если код ответа HTTP 200
                        console.log( "Ok" );
                    }
                }
            })
        });
    });
</script>
<div id="demo">
    <h1>The XMLHttpRequest Object</h1>
    <button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("demo").innerHTML =
                    this.responseText;
            }
        };
        xhttp.open("GET", "test.txt", true);
        xhttp.send();
    }
</script>
</body>
</html>