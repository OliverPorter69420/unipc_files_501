<?php
/*
More 'graceful' error handling
*/
//connect to db

try {
$db = new PDO('mysql:host=localhost; dbname=music;','root');
// Use this to access databases, do not forget this 
}

catch(Exception $e) {
    echo $e->getMessage();
} 

var_dump($db);
?>