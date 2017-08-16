<?php
require "common.php";
require "db.php";

$query = $db->query('SELECT * FROM products');
$result =  $query->fetch_all(MYSQLI_ASSOC);
?>
<h1> Products </h1>
<div style="width: 90%;">
<?php
foreach( $result as $r)
{
    echo "<div style='width:100px;float:left'>";
    echo "<img alt='Missing Picture' height=100px width=100px src='img/". $r['product_img_name'] . "'>";
    echo "<h2> Name: " . $r['product_name'] . " </h2>";
    echo "<p> Description:   " . $r['product_desc'] . "</p>";
    echo "<p> Price:  " . $r['price'] . "</p>";
    echo "<p> <a onclick=\"return confirm('Are you sure you want to buy this?')\" href='buy.php?id=". $r['id'] . "'> Buy</a></p>";
    echo "</div>";
}


echo " <a href='logout.php'>Log Out</a></p>";

?>
</div>


