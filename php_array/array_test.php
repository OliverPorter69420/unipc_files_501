<?php 
$days_of_the_week = ["Monday","Tuesday","wednesday","Thurdays","Friday"];
// echo "The day is " .$days_of_the_week[0];

// echo "<pre>";
// print_r($days_of_the_week);
// echo "</pre>";
// //regular array

$days_of_the_week_ass = ["mon" => "Monday","tue" => "Tuesday","wed" => "Wednesday","thur" => "Thurdays","fri" => "Friday"];
// echo "The day is " .$days_of_the_week_ass["mon"];

// echo "<pre>";
// print_r($days_of_the_week_ass);
// echo "</pre>";
// //associative array

$days_of_the_week_md = [["Monday",11],["Tuesday",12],["wednesday",13],["Thurdays",14],["Friday",15]];
// echo "The day is " .$days_of_the_week_md[0][0] ." the " .$days_of_the_week_md[0][1] ."th";

// echo "<pre>";
// print_r($days_of_the_week_md);
// echo "</pre>";
// //multi dimensional array

$days_of_the_week_md_ass = ["mar11" => ["mon" => "Monday", "date" => 1], 
                            "mar12" => [ "tue" => "Tuesday", "date" => 2], 
                            "mar13" => [ "wed" => "Wednesday", "date" => 3], 
                            "mar14" => [ "thur" => "Thurdays", "date" => 4], 
                            "mar15" => [ "fri" =>"Friday", "date" => 15],
                            "mar16" => [ "sat" =>"Saturday", "date" => 16],
                            "mar17" => [ "sun" =>"Sunday", "date" => 17]];
// echo "The day is " .$days_of_the_week_md_ass["mar11"]["mon"] ." the " .$days_of_the_week_md_ass["mar11"]["date"] ."th";

// echo "<pre>";
// print_r($days_of_the_week_md_ass);
// echo "</pre>";
// //multi dimensional associative array

foreach ($days_of_the_week as $days) {
    echo "<p> $days </p>";
}
//foreach loop for an array


echo "<h1> This weeks dates will include; </h1>";
foreach ($days_of_the_week_md_ass as $days)  {
    if (is_array($days)) {
        echo "<p>";
        foreach ($days as $value) {
            if (is_string($value)) {
                echo $value ." the ";
            }
            
            if (is_numeric($value) and $value >= 4 and $value <= 31) {
                echo $value ."th of March";
            } elseif ($value == 3) {
                echo $value ."rd of March";
            } elseif ($value == 2) {
                echo $value ."nd of March";
            } elseif ($value == 1) {
                echo $value ."st of March";
            } 
        }
        echo "</p>";
    }
}
//foreach loop for an array with keys and changing value based on string or numeric values. uses conditonals to find specific values

$num = 0;
foreach($days_of_the_week_md_ass as $keys => $rows) {
    $num += 1;
    echo "<p> the keys for row $num is $keys </p>";
}
//foreach loop which loops with different keys

echo "<p> for loop to counts up 100 numbers </p>";
for ($count=0; $count <= 100; $count++) { 
    echo $count ." ";
}
//for loop for 10 numbers

echo "<p> for loop to counts down from 100 </p>";
for ($count=100; $count >= 0; $count--) { 
    echo $count ." ";
}
//for loop for counting down 100 numbers

echo "<p> while loop to count up to 100 </p>";
$a = 0;
while ($a <= 100){
    echo $a . " ";
    $a += 1;
}
//while loop for counting up 100 numbers

echo "<p> while loop to count down from 100 </p>";
$a = 100;
while ($a >= 0){
    echo $a . " ";
    $a -= 1;
}
//while loop for counting down 100 numbers

?>