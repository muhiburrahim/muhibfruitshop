<?php
require "common.php";
require "db.php";
//doesn't add to employee table

/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 8/16/2017
 * Time: 7:19 AM
 */
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST["first_name"]) && isset($_POST["address"]) && isset($_POST["national_id"]) && isset($_POST["salary"]) && isset($_POST["last_name"])){
$first_name = $_POST['first_name'];
$address = $_POST['address'];
$national_id = $_POST['national_id'];
$salary = $_POST['salary'];
$last_name = $_POST['last_name'];


$sql = "INSERT INTO employee (`Employee_id`, `first_name`, `Address`, `National_id`, `Salary`, `last_name`) VALUES (NULL, $first_name', '$address', '$national_id', '15000', 'Rahman'); ";

if (mysqli_query($db, $sql)) {
echo "New record created successfully";
} else {
echo "Error: " . $sql . "<br>" . mysqli_error($db);
}

mysqli_close($db);}


?>
<form action="employee.php" method="POST">
    <label> first Name </label>
    <input type="text" name="first_name" /> <br />
    <label> last_name </label>
    <input type="text" name="last_name" /> <br />
    <label> address </label>
    <input type="text" name="address" /> <br />
    <label> national_id </label>
    <input type="text" name="national_id" /> <br />
    <label> salary </label>
    <input type="text" name="salary" /> <br />
    <input type="submit" name="Submit" value="submit" />
</form>