<?php 

function add_numbers($num1,$num2) {
    if (is_numeric($num1) and is_numeric($num2)){
            return $num1 + $num2;
    } 

    return "not a valid number or numbers, please input numbers into this function in the future";
}

$num1 = 49;
$num2 = NULL;

try {
    if (!isset($num1) ."<br>" or !isset($num2) ."<br>") {
        echo "one number is not set, please input two values"."<br>";

    } else {
        echo add_numbers($num1,$num2) ."<br>";
    }

    echo add_numbers(2,3) ."<br>";
    echo add_numbers("a",2) ."<br>";
    echo add_numbers("3","3") ."<br>";
    echo add_numbers(false,true) ."<br>";
    echo add_numbers(9.92392894,8.3284237847238) ."<br>";
    echo add_numbers(44,20) ."<br>";
    echo add_numbers(44324324,20) ."<br>";
    echo add_numbers(44,43432948239849234) ."<br>";
    echo add_numbers(44,2) ."<br>";
    echo add_numbers(2,"") ."<br>";
    echo add_numbers(3,NULL) ."<br>";
    echo add_numbers(2);
    echo add_numbers();

} catch (ArgumentCountError $e) {
    echo "two numbers are not inputted, please input two numbers; try again" ."<br>"; 

} 

echo "Done" ."<br>";

?>