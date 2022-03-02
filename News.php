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
$query_select = 'SELECT * FROM suggestnews LIMIT 10';

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
        <button id = "button1" type="submit">1</button>
        <button id = "button2" type="submit">2</button>
        <button id = "button3" type="submit">3</button>
        <button id = "button4" type="submit">4</button>
        <button id = "button5" type="submit">5</button>
        <button type="submit">6</button>
        <button type="submit">7</button>
        <button type="submit">8</button>
        <button type="submit">9</button>
        <button type="submit"> >> </button>
    </p>
</form>
<script type="text/javascript">
        document.querySelector("#button1").onclick = function()
        {
            alert("Вы нажали на кнопку 1");
        }
</script>
</body>
</html>