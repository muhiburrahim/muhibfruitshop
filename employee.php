<?php
require "common.php";
require "db.php";
if (!empty($_GET['delete']))
{
    $db->query("DELETE FROM employee where Employee_id=" . $_GET['delete']);
    echo "Employee deleted succesfully";
}

$query = $db->query("SELECT * FROM employee");
$result =  $query->fetch_all(MYSQLI_ASSOC);
if (!empty($_GET['update']))
{
    $db->query("UPDATE employee where Employee_id=" . $_GET['update']);

    echo "Employee updated succesfully";
}

$query = $db->query("SELECT * FROM employee");
$result =  $query->fetch_all(MYSQLI_ASSOC);


?>
<h1> Employees</h1>
<table>
    <tr> <th> ID</th> <th> First Name</th> <th>Last Name</th> <th>NID</th> <th>Address</th> <th>Salary</th></tr>
    <?php
    foreach( $result as $r)
    {
        echo "<tr>";
        echo "<td> " . $r['Employee_id'] . "</td>";
        echo "<td> " . $r['first_name'] . "</td>";
        echo "<td> " . $r['last_name'] . "</td>";
        echo "<td> " . $r['Address'] . "</td>";
        echo "<td> " . $r['National_id'] . "</td>";
        echo "<td> " . $r['Salary'] . "</td>";
        echo "<td> <a href='?delete=". $r['Employee_id'] . "'> Delete</a></td>";
        echo "<td> <a href='?update=". $r['Employee_id'] . "'> Update</a></td>";
    }
    echo "<p> <a href='addemployee.php'> Add Employee</a></p>";

    ?>
</table>



<!--<div id="result"></div>-->
