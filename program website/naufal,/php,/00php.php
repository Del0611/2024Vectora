<?php
echo "helloworld";
$x = "naufal";
$y = 2;
echo $x;
echo $y;
$b = 5;
if ($b < 20 ) {
   echo "boxing";
}
else if ($b <= 24) {
    echo "smk kartika";
}
else {
    echo "sulawesi selatan";
}
$favcolor = "merah";
switch ($favcolor) {
case "merah":
  echo " your favorite color is red";
  break;
case "kuning":
  echo "your favorite colour is yellow";
  break;
case "hijau":
 echo "your favorite colour is green";
break;
default:
 echo "your favorite colour is neilher red blue not green";
}
$i = 1; // initialize counter 
while ($i < 6) { // check condition
 echo $i; // execute code
 $i++; // increment counter
?>
