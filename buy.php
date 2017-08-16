<?php

require "common.php";
require "db.php";

if (!empty($_GET['id'])) //if id is not empty
{
    $query = $db->query("INSERT INTO orders(user_id, product_id) VALUES({$_GET['id']}, {$_SESSION['user_id']})");
    $query = $db->query("SELECT * FROM orders where user_id=" . $_SESSION['user_id']);
    $result =  $query->fetch_all(MYSQLI_ASSOC);
}
?>

<h1> Order History</h1>
<table>
    <tr> <th> ID</th> <th> User ID</th><th> Order ID</th></tr>
    <?php
foreach( $result as $r)
{
    echo "<tr> <td>" .  $r['id'] . "</td> <td>" .  $r['user_id'] . "</td> <td>" .  $r['product_id'] . "</td></tr>";
}
    ?>
</table>


