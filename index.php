<?php
/*$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);

echo "Hello";*/

$obj=new main();

class main{
    public function __construct(){
            $date=date('Y-m-d');
	    week4::display('Value of $date is '.$date.'<br>');
	    $tar='2017/05/24';
	    week4::display('Value of $tar '.$tar.'<br>');
	    $year=array(2012,396,300,2000,1100,1089);
	    week4::printArray('Value of $year ');
            week4::display('<br>');
   	    week4::display('<br>');



	    }
}

class week4{
    public static function display($text){
            echo $text;
	        }
     public static function printArray($myArray){
	    print_r($myArray);
		}    
}




?>
