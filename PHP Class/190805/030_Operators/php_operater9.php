<?php

$x = 100;
$y = &$x;// 加&是找出記憶體位值 做等於運算 所以當數字被改 就會跟著被改

$y = 200;
echo "x = $x </br>";

unset($x);
echo "y = $y </br>";

?>