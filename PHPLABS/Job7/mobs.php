<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MobsPHP</title>
</head>
<body>
<center><h1>MobsPHP</h1></center>
<?php
$A= array("phplaba"=>"18", "mobsyara"=>"phplaba", "c"=>array("mobsyara"=>"phplaba"));
$st=serialize($A);
echo $st;
///////////////////////////////////////////////////////
echo "<br/>";
echo "<br/>";
$phone = array(666,564,434,0112);
$save = serialize($phone);
echo $save;
$phone = "Phplaba";
echo count($phone);
$phone = unserialize($save);
echo count($phone);
///////////////////////////////////////////////////////
function mysum() {
	for ($i=0;$i<func_num_args();$i++) {
		echo func_get_arg($i);
		$asd=$i+5;
		return $asd;
	}
}
echo "<br/>";
echo "<br/>";
mysum(1,2,3);
?>
</body>
</html>
