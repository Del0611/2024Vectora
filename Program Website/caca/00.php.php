<?php
echo 'Hello World!';
$x = 5;
echo "\n";
$y = "Cahaya";
echo $x;
echo "\n";
$b = 5.34;
echo $b;
$t = 20;
echo "\n";
if ($t == 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t === 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t != 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t <> 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t !== 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t > 20) {
    echo "Have a good day!\n";
}$t = 14;
if ($t < 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t >= 20) {
    echo "Have a good day!\n";
}
$t = 20;
if ($t <= 20) {
    echo "Have a good day!\n";
}

$favcolor = "red";

switch ($favcolor) {
    case "red":
     echo "Your favourite color is red!\n";
     break;
     
    case "blue":
     echo "Your favourite color is blue!";
     break;
     
    case "green":
     echo "Your favourite color is green!";
     break;
     
    default:
     echo "Your favourite is neither black, read, nor green!";
}
$i = 1; 
while ($i < 6) { 
  echo $i;
  $i++; 
}
?>

