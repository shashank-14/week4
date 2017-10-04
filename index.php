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
	    week4::display('Value of $year ');
	    week4::printArray($year);
            week4::display('<br>');
   	    week4::display('<br>');

	    week4::display('To replace - with / in date'.'<br>');
	    $date1=str_replace("-","/",$date);
	    week4::display($date1.'<br>');
            week4::display('<br>');

	    week4::display('To compare date and tar'.'<br>');
	    if (strcmp($date,$tar)>0){
	    week4::display('The future'.'<br>');}
	    elseif (strcmp($date,$tar)<0){
	    week4::display('Past'.'<br>');}
	    else{
	    week4::display('Oops'.'<br>');}
	    week4::display('<br>');

	    week4::display('To search for / in $date and print position'.'<br>');
	    week4::display('position ');
	    for($i=0;$i<strlen($date1);$i++){
		if($date1[$i]=='/'){
			week4::display($i.' ');
			}
		}
	    week4::display('<br>');
            week4::display('<br>');

	    week4::display('To count number of words'.'<br>');
	    $word=count(explode(" ",$date1));
	    week4::display($word.'<br>');
	    week4::display('<br>');

	    week4::display('To print length of string'.'<br>');
	    $string1="hi this is new string.";
	    $len=strlen($string1);
            week4::display('New String is :'.$string1.'<br>');
            week4::display('Length of string is :'.$len.'<br>');
	    week4::display('<br>');

	    week4::display('To display ASCII value of first character in new string'.'<br>');
	    $value=ord(substr($string1,0,1));
	    week4::display('ASCII value of h is '.$value.'<br>');
	    week4::display('<br>');

	    week4::display('To return last two characters of $date'.'<br>');
	    week4::display('Last two charcters are :'.substr($date,-2).'<br>');
	    week4::display('<br>');

	    week4::display('To break with / and print each element'.'<br>');
	    $dateElements=explode("/",$date1);
	    week4::display('Elements are : ');
            for($i=0;$i<count($dateElements);$i++){
            week4::display($dateElements[$i]." ");
	     }
	    week4::display('<br>');
	    week4::display('<br>');
      
      week4::display('To find leap year using foreach loop'.'<br>');
        foreach ($year as $val)
        {
            if($val%4==0){
                week4::display('True ');
            }
            else{
                week4::display('False ');
            }
        }
        week4::display('<br>');
        week4::display('<br>');

      week4::display('To find leap year using while loop'.'<br>');
        $count=count($year);
        $i=0;
        while($i<$count){
        if ($year[$i]%4==0){
            week4::display('True ');
            }
        else{
            week4::display('False ');
            }
        $i++;
        }
        week4::display('<br>');
        week4::display('<br>');
        week4::display('To display leap year using switch'.'<br>');
        foreach($year as $val){
            $rem=$val%4;
            switch ($rem){
                case 0:
                    week4::display('True ');
                    break;
                default:
                    week4::display('False ');
                    break;
                        }
        }
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
