<?php

$i= 1;
// for($x; $x < 10; $x++) {
//     echo 'Way '.$x.'<br>';
// }

// while($x <= 10){
//     echo 'Way '.$x++.'<br>';
// }

// do{
//     echo 'Way <br>';
//     $i++;
// } while ($i <= 10);

// $array = ['January', 'February', 'March', 'April'];

// foreach($array as $key => $value){
//     echo $value. '<br>';
// }


// for ($i=1; $i < 5; $i++) { 
//     for ($x=1; $x < 5; $x++) { 
//         echo 'Loop ke - '.$i.','.$x.'<br>';
//     }
// }

$rows = 9;
for ($i = 1; $i <= $rows; $i++) {
    if ($i % 3 == 1) {
        for ($j = 1; $j <= $i; $j++) {
            echo "+ ";
        }
    } elseif ($i % 3 == 2) {
        for ($j = 1; $j <= $i; $j++) {
            echo "- ";
        }
    } else {
        for ($j = 1; $j <= $i; $j++) {
            echo "* ";
        }
    }
    echo "<br>";
}


?>