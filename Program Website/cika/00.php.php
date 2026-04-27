<?php
echo "Hello World!";
$x = 5;
$y = "Cika";
echo $y;
$b = 5.34;
echo"\n";
echo $b;
    $t = 14;
    if ($t == 14)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t === 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t != 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t <> 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t !== 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t > 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t < 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t >= 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $t = 14;
    if ($t <= 20)  {
        echo "Have a good day!";
    }
    echo"\n";
    $favcolor ="red";
    
    switch($favcolor) {
        case "red":
            echo "Your favorite color is red!";
            break;
       
        case"blue":
            echo "Your favorite color is blue!";
            break;
       
        case"green":
            echo "Your favorite color is green!";
            break;
        
        default:
            echo "Your favorite color is neither red, blue, nor green!";
         }
    echo"\n";
    $i = 1; 
    while($i < 6) {
        echo $i;
        $i++;
    }
?>
