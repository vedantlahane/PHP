<?php
$num = 10; 

$sum = 0;
$num2 = 1;
while($num2 <= $num) {
    $sum += $num2;
    $num2++;
}
echo "Sum of natural numbers is ";
echo $sum;
?>