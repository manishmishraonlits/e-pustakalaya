<?php

$email = $_POST['email'];
$password = $_POST['password'];

require('connect.php');

$sql = "SELECT user FROM admin WHERE user='$email' AND password='$password'";

$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    header("Location:layout.php");
    session_start();
    $_SESSION['email'] = $email;
} else {
    header("Location:index.php?status=1");
}
