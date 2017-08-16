<?php
/**
 * Created by PhpStorm.
 * User: muhib
 * Date: 8/16/2017
 * Time: 2:27 PM
 */
require "common.php";
require "db.php";

//set user id, load information from database into placeholder, update
if(isset($_POST["first_name"]) && isset($_POST["address"]) && isset($_POST["national_id"]) && isset($_POST["salary"]) && isset($_POST["last_name"])){
    $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $address = $_POST['address'];
    $national_id = $_POST['national_id'];
    $salary = $_POST['salary'];
    $last_name = $_POST['last_name'];
    $query = "UPDATE `employee` SET `first_name`='".$first_name."',`address`='".$address."',`national_id`= $national_id,`salary`= $salary,`last_name`= $last_name WHERE `Employee_id` = $id";

    $result = mysqli_query($db, $query);

    if($result)
    {
        echo 'Data Updated';
    }else{
        echo 'Data Not Updated';
    }
    mysqli_close($db);
}

?>

<form action="" method="post">
    ID To Update: <input type="text" name="id" required><br><br>
    New First Name:<input type="text" name="first_name" required><br><br>
    New Last Name:<input type="text" name="last_name" required><br><br>
    New National ID:<input type="text" name="national_id" required><br><br>
    New Salary:<input type="text" name="salary" required><br><br>
    New Address:<input type="text" name="address" required><br><br>
    <input type="submit" name="update" value="Update Data">

</form>


