<?php
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z); // Outputs: boolean true
echo "<br>";
var_dump($x === $z); // Outputs: boolean false
echo "<br>";
var_dump($x != $y); // Outputs: boolean true
echo "<br>";
var_dump($x !== $z); // Outputs: boolean true
echo "<br>";
var_dump($x<$y); // Outputs: boolean true
echo "<br>";
var_dump($x>$y); // Outputs: boolean false
echo "<br>";
var_dump($x<=$y); // Outputs: boolean true
echo "<br>";
var_dump($x>=$y); // Outputs: boolean false

echo "<br>";
echo "<br>";

$colors=array("red","green","blue","yellow");
foreach($colors as $value){
    echo "$value <br>";
}
echo "<br>";

$colors=array("red","green","blue","yellow");
for($x=0;$x<count($colors);$x++){
    echo $colors[$x];
    echo "<br>";
}
echo "<br>";

function solveQuad($a,$b,$c){
    $d=$b*$b-4*$a*$c;
    if($d>0){
        $r1=(-$b+sqrt($d))/(2*$a);
        $r2=(-$b-sqrt($d))/(2*$a);
        return[$r1,$r2];
    }
    else if($d==0){
        $r1=-$b/(2*$a);
        return[$r1];
    }
    else{
        $realPart=-$b/(2*$a);
        $imaginaryPart=sqrt(-$d)/(2*$a);
        return[$realPart,$imaginaryPart];
    }
}
$a=1;
$b=-3;
$c=2;
$result=solveQuad($a,$b,$c);
echo "Roots: ".implode(",",$result);
?>