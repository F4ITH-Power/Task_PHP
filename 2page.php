<!---Ver 1.0.4(01.18.2022)--->
<link rel='stylesheet' href='style.css'>
<?php
$script = file_get_contents('return.js');   // Writing to a script variable
$back = $_SERVER['HTTP_REFERER'];   //  Writing to the variable of the last visited page

date_default_timezone_set('Europe/London');
$_monthsList = array(
    "1"=>"Января",
    "2"=>"Февраля",
    "3"=>"Марта",
    "4"=>"Апреля",
    "5"=>"Мая",
    "6"=>"Июня",
    "7"=>"Июля",
    "8"=>"Августа",
    "9"=>"Сентября",
    "10"=>"Октября",
    "11"=>"Ноября",
    "12"=>"Декабря");

// Check on GET
if ((isset($_GET['userName']) && trim($_GET['userName']) !== '') && (isset($_GET['userPassword']) && trim($_GET['userPassword'])!== ''))
{   // Saving entered data into variables
    $login = $_GET['userName'];
    $password = $_GET['userPassword'];
    $arr = array   // create array
    (
    'userName' => $login,
    'userPassword' => $password,
    );
}
else   // Return to home page
{
    echo "
    <html>
    <head>
    <meta http-equiv='Refresh' content='0; URL=".$back."'>
    </head>
    </html>";
    echo "<script>".$script."</script>";
}
$date = $_GET["date-start"];
$timestamp = strtotime($date);
?>

<body> <!---Text output--->
    <div class="page2">
        
        Your Username - <?php echo $arr['userName']; ?>(<?php echo mb_strlen($_GET["userName"]); ?> signifier) <br/>
        Your Password - <?php echo $arr['userPassword']; ?>(<?php echo mb_strlen($_GET["userPassword"]); ?> signifier)<br/>

        <?php 
        //$years = [date("y", $timestamp)];
        $month = $_monthsList[date("n", $timestamp)];
        //echo $month;
        echo date("j", $timestamp)." ".$month." ".date("Y", $timestamp);
        ?>

    </div>
</body>