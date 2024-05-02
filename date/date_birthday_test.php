<?php

$d1 = date_create("2004-05-27");
$d2 = date_create("now");
$diff = date_diff($d1,$d2);

echo "<p>".$diff->days."</p>";

?>