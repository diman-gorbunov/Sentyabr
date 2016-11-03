<?php
$oops = fopen("file.txt", "w");
$text = "Gorbunov "; 
fwrite($oops, $text);
////////////////////////////////
$mobs2=fopen("file.txt", "a+");
$write="two";
fwrite($mobs2,$write);
$srcfile='C:\OpenServer\domains\PHPLABS\Job4\file.txt';
$dstfile='C:\OpenServer\domains\PHPLABS\Job4\papca\oops.txt';
dirname($dstfile);
copy($srcfile, $dstfile);

fclose($oops);
?>