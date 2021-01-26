<?php
session_start();
require_once 'dbConfig.php'; 

if (count($_POST) > 0) {
    $result = mysqli_query($db, "SELECT *from user");
    $row = mysqli_fetch_array($result);
    if ($_POST["currentPassword"] == $row["pass"]) {
        mysqli_query($db, "UPDATE user set pass='" . $_POST["newPassword"] . "'");
        $message = "Password Changed";
    } else
        $message = "Current Password is not correct";
}
?>