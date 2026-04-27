<?php
echo "Hello Word!\n";
$x = 5;
$y = "jhon";
echo $x;
echo "\n";
$b = 5.34;
echo $b;
echo "\n";
$t = 14;
if ($t < 20) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida == 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida === 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida != 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida <> 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida !== 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida > 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida < 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida >= 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida <= 14) {
    echo "Have a good day!\n";
}

$pida = 14;
if ($pida <=> 14) {
    echo "Have a good day!\n";
}

$favcolor = "red";
switch ($favcolor) {
case "red":
     echo "Your favorite color is red!\n";
     break;
     
  case "blue":
      echo "Your favorite color is blue!";
      break;
      
  case "green":
      echo "Your favorite color green!";
      break;
      default:
        echo "Your favorite color is neither red, blue, nor green!";
}
$i = 1;
while ($i < 6) { 
  echo $i; 
  $i++; 
}
?>
