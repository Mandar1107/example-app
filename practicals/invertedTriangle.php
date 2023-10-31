<?php
$height = 5;  

for ($i = $height; $i >= 1; $i--) {
    for ($j = $height - $i; $j > 0; $j--) {
        echo " ";
    }
    for ($k = 1;$k<=2*$i - 1; $k++) {
        echo "*";
    }

   
    echo "\n";
}
?>