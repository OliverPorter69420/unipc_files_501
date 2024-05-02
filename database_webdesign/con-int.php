<?php

try {
    $db = new PDO('mysql:host=localhost; dbname=sakila;','root');
    // Use this to access databases, do not forget this; not secure way though
} 

catch(Exception $e) {
    echo $e->getMessage();
} 

?>