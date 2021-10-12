<?php
$menu = array("Home" => "index.php",
            "About" => "about.php",
            "Contact" => "contact.html",
            "Productг" => "product.php");

foreach($menu as $item => $item_count){
    echo "<a href=".$item_count.">".$item."</a><br/>";
}
?>