<?php
$input = array("oranges", "apples", "pears");
$flipped = array_flip($input);

print_r($flipped);
/////////////////////////////////////////////
echo "<\br>";
$array = array(0 => 100, "color" => "red");
print_r(array_keys($array));
/////////////////////////////////////////////
echo "<\br>";
$array = array("size" => "XL", "color" => "gold");
print_r(array_values($array));
/////////////////////////////////////////////
echo "<\br>";
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Нашел Irix";
}
if (in_array("mac", $os)) {
    echo "Нашел mac";
}
/////////////////////////////////////////////
echo "<\br>";
$array = array(1, "hello", 1, "world", "hello");
print_r(array_count_values($array));
/////////////////////////////////////////////
echo "<\br>";
$input = array("a", "b", "c", "d", "e");

$output = array_slice($input, 2);
$output = array_slice($input, -2, 1);
$output = array_slice($input, 0, 3);

print_r(array_slice($input, 2, -1));
print_r(array_slice($input, 2, -1, true));
/////////////////////////////////////////////
echo "<\br>";
$stack = array("orange", "banana", "apple", "raspberry");
$fruit = array_pop($stack);
print_r($stack);
/////////////////////////////////////////////
echo "<\br>";
$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");
print_r($queue);
/////////////////////////////////////////////
echo "<\br>";
?>