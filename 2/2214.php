<?php
$x=10; 
$y=6;
echo ($x + $y); // ��� 16
echo "<br>";
echo ($x - $y); // ��� 4
echo "<br>";
echo ($x * $y); // ��� 60
echo "<br>";
echo ($x / $y); // ��� 1.6666666666667
echo "<br>";
echo ($x % $y); // ��� 4
echo "<br>";
$z=5;
$z *= 6;
echo $z; // ��� 30
echo "<br>";
$x="Hello";
$x .= " weixin!";
echo $x; // ��� Hello weixin!
echo "<br>";
$i=5;
echo $i--; // ��� 5
echo "<br>";
$a=50;
$b=90;
var_dump($a > $b);

$max = ($a>=$b) ? $a : $b;
echo $max; // ��� 90
?>