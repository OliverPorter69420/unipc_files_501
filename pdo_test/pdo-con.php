<?php

$db = new PDO('mysql:host=localhost; dbname=oporter1;','oporter1', '3w6QEiJ8');

print_r($db);

$genre = "Action";

$sql = "SELECT `film_category`.`film_id`, `film`.`title`, `category`.`name`, `film_category`.`category_id`
        FROM `film_category` 
            LEFT JOIN `film` ON `film_category`.`film_id` = `film`.`film_id` 
            LEFT JOIN `category` ON `film_category`.`category_id` = `category`.`category_id`
        WHERE `category`.`name` = :genre;";

echo "$sql";
echo "$genre";

$statement = $db->prepare($sql,[PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY]);
$statement->bindParam(":genre",$genre,PDO::PARAM_STR);

echo "$statement";

$statement->execute();  
$film_catagories = $statement->fetchAll(PDO::FETCH_ASSOC);

echo "<pre>";
echo "$sql";
print_r($film_catagories);
echo "</pre>";
?>