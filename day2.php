<?php
function isArmstrong($num) {
    $sum = 0;
    $temp = $num;
    $digits = strlen($num);
    
    while ($temp != 0) {
        $remainder = $temp % 10;
        $sum += pow($remainder, $digits);
        $temp = (int)($temp / 10);
    }
    
    if ($sum == $num) {
        return true;
    } else {
        return false;
    }
}

function printArmstrongNumbers($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        if (isArmstrong($i)) {
            echo $i . " ";
        }
    }
}

$start = 100;
$end = 1000;
echo "Armstrong numbers between $start and $end are: ";


printArmstrongNumbers($start, $end);
echo "<br>";
?>

<?php
$seasons = array("Spring", "Summer", "Fall", "Winter");
//access array elements using foreach loop
foreach ($seasons as $value) {
    echo "$value <br>";
}
echo "<br>";

?>
<!-- <?php
function calculator($num1, $num2, $operator) {
    switch ($operator) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Error: Division by zero";
            }
        default:
            return "Error: Invalid operator";
    }
}

// Take input from user
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$result = calculator($num1, $num2, $operator);
echo "Result: " . $result;
?> -->

<?php
$result = array(
    array("Manoj",7.8,"pass"),
    array("Raj",6.7,"pass"),
    array("Rahul",5.6,"pass")
);

echo $result[0][0]. " has scored " . $result[0][1] . " and he has " . $result[0][2] . "<br>";
echo $result[1][0]. " has scored " . $result[1][1] . " and he has " . $result[1][2] . "<br>";
echo $result[2][0]. " has scored " . $result[2][1] . " and he has " . $result[2][2] . "<br>";

?>

<?php
$array1 = array(1, 2, 3);
$array2 = array("a", "b", "c");

$combinedArray = array_merge($array1, $array2);

print_r($combinedArray);
