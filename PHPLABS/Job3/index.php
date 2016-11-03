<?php
$strftime=strftime("%B %Y года, %d число. Был %A, часы показывали %H:%M.");
  echo $strftime;
    echo "<br>";
$strtotime=strtotime("30 September 2016");
  echo $strtotime;
    echo "<br>";
$getdate=getdate();
print_r ($getdate);
  echo "<br>";
if (checkdate(9, 30, 2016))
{
	echo "da";
}
else
{
	echo "net";
}
echo "<br>";
$phpversion=phpversion();
  echo $phpversion;
    echo "<br>";
function local2gm($localStamp=false) {
	if ($localStamp === false) $localStamp = time();
	$tzOffset=date("Z", $localStamp);
	return $localStamp - $tzOffset;
}
function gm2local($gmStamp=false, $tzOffset=false)
{
	if ($gmStamp === false) return time();
	if ($tzOffset === false)
		$tzOffset=date("Z",$gmStamp);
	else
		$tzOffset*=60*60;
	return $gmStamp+$tzOffset;
}
echo local2gm(time());
?>
