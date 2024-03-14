<?php
$tegu["tegu"] = [["tegu","Argentine black and white tegu"],["tegu2","Red tegu"]];
$snake["snake"] =[["snake","Emerald boa"],["snake2","Parrot snake"],["snake3","Ball python"]];
$crocodiles["alligator"] = [["alligator","American alligator"]];

$reptile_tabs = [$tegu,$snake,$crocodiles];
$tabs_created = false;
//this will be changed with the database in the future and actual project

// echo "<pre>";
// print_r($reptile_tabs);
// echo "</pre>";

if ($_POST["image_name"] == NULL) {
    $image_name = "test";
} else {
    $image_name = $_POST["image_name"];
}    

// echo "<pre>";
// print_r($_POST);
// echo "</pre>";


// Create connection
//$conn = mysqli_connect($servername);

// Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reptile hub</title>
    <link rel="stylesheet" href="page.css">
</head>

<body>
    <Header>
        <div class="logo_container">
            <img src="reptile_images/logo.png" alt="company logo">
            <h1>Reptile hub</h1>
            <button role="button"> Donations </button>
        </div>

        <div class="screen_top topnav">
            <a href="#">Homepage</a>
            <a href="#">Species kept</a>
            <a href="#">About us</a>
        </div>
    </Header>

    <main>
        <div class="search_bar_container">
            <form action="phptest.php" method="post" autocomplete="on">
                <p>
                    Search for a reptile species <input type="text" name="image_name" value = <?php echo $image_name; ?>>
                </p>
            </form>
        </div>

        <div class="content_container">
            <?php foreach ($reptile_tabs as $reptile_tab) {
                    if (key($reptile_tab) == $image_name){
                        foreach ($reptile_tab[$image_name] as $content) {
                            echo "<div class='content_container content_box'>
                                <a href = #><img src=reptile_images/$content[0].png alt = $content[1]></a>
                                <h1>$content[1]</h1>
                            </div>";
                        }

                        $tabs_created = true;
                    } 
                }

                if ($tabs_created == false) {
                    echo "<div class='content_container content_box'>
                        <a href = #><img src=reptile_images/test_img.png alt = test image for errors in displaying relavent images></a>
                        <h1>page does not exist</h1>
                    </div>";
                }
            ?>
        </div>
    </main>

    <footer>
        <div class="footer_container">
            <img src="reptile_images/logo.png" alt = "company logo">

            <div class="footer_container footer_links">
                <a href="#">contact us</a>
                <a href="#">Terms and conditions</a>
                <a href="#">About us</a>
            </div>
        </div>
    </footer>
</body>

</html>
