
<?php

require('details.php');

if (isset($_POST['song_id']) or isset($_GET['song_id'])) {
    $sql = "UPDATE song SET title = ".$_POST['title']." WHERE song_id =".$_POST['song_id'];
    echo $sql;
}

$statement = $db->query($sql);

$data_entity = $statement->fetch(PDO::FETCH_ASSOC);

?>

<form action = "<?php echo $_SERVER['PHP_SELF'];?>" method = "POST">
    <p> song title <input type = "text" name = "title" value = "<?php echo $data_entity["title"]?>"> </p>
    <p> song length <input type = "text" name = "song_length" value = "<?php echo $data_entity["song_length"]?>"> </p>
    <input type = "hidden" name = "song_id" value = <?php echo $current_id?> >
    <input type = "submit" value = "update" >
</form>