<?
$array [1] = "Один";
$array [2] = "Два";
$array [3] = "Три";
$array [4] = "Четыре";
$array [5] = "Пять";
echo $array[1],$array[2],$array[3],$array[4],$array[5];
//////////////////////////////////
echo "<br/>";
$info = array ('кофе', 'коричневый', 'кофеин');
list ($a,$b,$c)=$info;
echo $a,$b,$c;
//////////////////////////////////
echo "<br/>";
$array [6] = 2;
$array [7] = 4;
$array [8] = 7;
$sum= $array [6]+$array [7]+$array [8];
echo $sum;
//////////////////////////////////
echo "<br/>";
 $car = array("null"=>"0", "one"=>"1",
      "two"=>"2");
   foreach($car as $cif => $val)
   {
      echo("$cif -> $val <br>");
   }
?>
