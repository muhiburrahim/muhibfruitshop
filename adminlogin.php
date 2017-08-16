<?php
require "db.php";
session_start();
if (!empty($_GET['logout']) && $_GET['logout'] == 1) {
    unset($_SESSION['login_status']);
    unset($_SESSION['user_id']);
    echo "you are logged out!";
    die;
}

if (!empty($_SESSION['login_status']) && $_SESSION['login_status'] == 1) {
    header('admin.php'); die;
    echo "you are already logged in!";
    die;
}
if (!empty($_POST['username']) && !empty($_POST['password'])) {
    $query = $db->query('SELECT * FROM admin_log where username="' . $_POST['username'] . '"');
    $result =  $query->fetch_all(MYSQLI_ASSOC);
    if (!empty($result[0]))
    {
        $password = md5($_POST['password']);
        if ($password == $result[0]['password'])
        {
            $_SESSION['login_status'] = 1;
            $_SESSION['user_id'] = $result[0]['id'];
            header('admin.php');die;
        } else {
            echo "Username or password incorrect";
        }

    } else {
        echo "No user found";
    }
}
?>

<form action="" method="POST">
    <label> Username </label>
    <input type="text" name="username" /> <br />
    <label> Password </label>
    <input type="password" name="password" /> <br />
    <input type="submit" name="Submit" value="submit" />
</form>