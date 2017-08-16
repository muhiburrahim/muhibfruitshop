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