
<?php
echo round(3.4);         // 3
echo round(3.5);         // 4
echo round(3.6);         // 4
echo round(3.6, 0);      // 4
echo round(1.95583, 2);  // 1.96
echo round(1241757, -3); // 1242000
echo round(5.045, 2);    // 5.05
echo round(5.055, 2);    // 5.06
///////////////////////////////////////////////////////////////////
echo "<br>";
echo rand() . "\n";
echo rand() . "\n";
echo rand(5, 15);
/////////////////////////////
echo "<br>";
echo sqrt(9); // 3
echo sqrt(10); // 3.16227766 ...
echo "<br>";
////
echo exp(12) . "\n";
echo exp(5.7);
//////////////////////////
echo "<br>";
echo deg2rad(45); // 0.785398163397
var_dump(deg2rad(45) === M_PI_4); // bool(true)
?>
