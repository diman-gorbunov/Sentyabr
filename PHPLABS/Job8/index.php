<?php
$money1 = 68.75;
$money2 = 54.35;
$money = $money1+$money2;
echo "$money<br>";
echo sprintf ("%01.2f<br>",$money);
///////////////////////////////////
echo "<br/>";
function cite($ourText, $maxlen=60,$prefix=">"){
	$st = wordwrap($ourText, $maxlen-strlen($prefix),"\n");
	$st = $prefix.str_replace("\n","\n$prefix",$st);
	return $st;
	
}
echo "<pre>";
echo cite("sssssssssssssssssssssssssssssssssssssssssfffffffffffffffffffffffffffffffff",20);
////////////////////////////////////
echo "<br/>";
$mobs = array ('Псина', 'коричневый', 'Иван');

$people = array ('Пекари', 'коричневый', 'кофеин');

$dog = array ('кофе', 'Дубов', 'кофеин');

$ivan = array ('кофе', 'коричневый', 'кофеин');

$dodobov = array ('кофе', 'коричневый', 'кофеин');

$result = array_merge($mobs,$people,$dog,$ivan,$dodobov);
echo "<pre>";
print_r ($result);
?>
