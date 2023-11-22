<?php
echo "0 \n";
echo "1 \n";
$i = 0;
$j = 1;
while($j <= 10000) {
    $k = $i + $j;
    echo "{$k}";
    $i = $j;
    $j = $k;
    echo "\n";
}



