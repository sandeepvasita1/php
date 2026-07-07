<?php
if(isset($_GET["p"]))
{
    $product = $_GET["p"];

    echo "You have selected <b>" . $product . "</b> product.";
}
?>