<?php
require "common.php";
require "db.php";

//issue: blank inputs getting through to database - done used required
//duplicate value in database getting stored.

// Create connection
// Check connection
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
if(isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["address"])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $passwrd = $_POST['password'];
    $address = $_POST['address'];

    $sql = "INSERT INTO users (username, email, passwrd, address) VALUES ('$username','$email','$passwrd','$address')";

    if (mysqli_query($db, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }

mysqli_close($db);}

echo "<p> <a href='login.php'> Customer Log In</a></p>";
echo "<p> <a href='adminlogin.php'> Admin Log In</a></p>";

?>
<form action="" method="POST">
    <label> Username </label>
    <input type="text" name="username" required/> <br />
    <label> Email </label>
    <input type="text" name="email" required/> <br />
    <label> Password </label>
    <input type="password" name="password" required/> <br />
    <label> Address </label>
    <input type="text" name="address" required/> <br />
    <input type="submit" name="Submit" value="submit" />
</form>
