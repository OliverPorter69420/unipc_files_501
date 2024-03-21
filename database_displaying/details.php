<?php

try {
    require ('con-int.php');
} 
    
catch(Exception $e) {
    echo $e->getMessage();
} 

if (isset($_GET['song_id'])) {
    $current_id = $_GET['song_id'];
} else {
    echo "<p> you stupid </p>";
}

$sql = "SELECT * FROM song WHERE song_id = ".$current_id;

$statement = $db->query($sql);

$data_entity = $statement->fetch(PDO::FETCH_ASSOC);
?>

<h1> Details </h1>
<p> <?php print_r($data_entity); ?> </p>

<form action = "action.php">
    <p> </p>
</form>
