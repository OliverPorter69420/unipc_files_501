<?php 

function get_photo($path) {

    
    if (file_exists($path) and is_file($path)) {
        echo "<img src='$path' alt='test'>";

    } else {
        echo "<p> files do not exist, please try again </p>";
    }
}

function check_size($size,$max_size) {
    return ($size < $max_size);
}

function check_type($file_type) {
    return ($file_type == "image/jpg" or $file_type == "image/jpeg" or $file_type == "image/png");
}

echo "<pre>";
print_r($_FILES);
echo "</pre>";

$max_size = 100000;

if (isset($_FILES)) {
    foreach ($_FILES as $row) {
        $tmp = $row["tmp_name"];
        $path = "uploads/$row[name]";
        $size =  $row["size"];
        $file_type = $row["type"];


        if (check_type($file_type) and check_size($size,$max_size)) {

            if (file_exists($path) and substr($file_type, 0,5) == "image") {
                echo "<p> image already existings in this file </p>";

            } else {
                echo "<p> successful image inputed into the code</p>"; 
                move_uploaded_file($tmp,$path);
                get_photo($path);
            }

        } else {
            echo "<p> not a jpg/jpeg or png image </p>";
            echo "<p> file is too big by ".($size - $max_size)." bytes, please compress or submit another file </p>";
        }

    }
}


?>

