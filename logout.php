<?php
require "common.php";
require "db.php";
//what does this do? where does it redirect from? i think it redirects from the catelogue page
if (!empty($_GET['logout']) && $_GET['logout'] == 1) {
    unset($_SESSION['login_status']);
    unset($_SESSION['user_id']);
    echo "you are logged out!";
    die;
}
header("Location:index.php");
