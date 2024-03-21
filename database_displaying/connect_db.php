<?php
/*
More 'graceful' error handling
*/
//connect to db PDO_img.PDF file
try {
    require ('con-int.php');
} 

catch(Exception $e) {
    echo $e->getMessage();
} 

foreach ($db -> query("select * from song limit 10") as $row) {
    echo htmlentities($row['title'])." <a href = 'edit.php?song_id=".$row['song_id']."'>show details<a> <br>";
}
?>