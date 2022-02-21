<!---Ver 1.0.5(02.21.2022)--->
<?php
class Date 
{
    public $date, $time, $years, $_monthsList, $month;

    function __construct() 
    {
        $this->date = $date = $_GET["date-start"];
        $this->time = $time = strtotime($date);
        $this->monthlist = $_monthsList = array 
        (
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
        $this->month = $month = $_monthsList[date("n", $time)];
        $this->years = $years = date("Y", $time);
    }
    static public function test()
    {
    	echo date("j", $time)." ".$month." ".date("Y", $time);// выводит "1 1970"
    }
};

$date0 = new Date;

echo $date0->date;
echo "</br>";
echo $date0->time;
echo "</br>";
echo $date0->years;
echo "</br>";
echo $date0->month;
echo "</br>";

Date::test();// "1 1970"
?>