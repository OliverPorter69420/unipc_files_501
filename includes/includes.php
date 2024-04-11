<?php 


try {
    require("functions.php");
} catch (\Throwable $th) {
    echo "<p> error, files cannot be called upon </p>";
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    include("includes.html");

    hello_world();

    echo "<p> 30 </p>";

    echo "<p>".VAT(30)."</p>";
    ?>

    <p>Also includes me</p>
</body>
</html>