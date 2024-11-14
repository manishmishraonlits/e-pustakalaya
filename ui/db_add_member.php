<?php

require('connect.php');

$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];


$sql = "INSERT INTO member(member_name, street, city, state, pin_code, contact, email, aadhar) VALUES ('$name','$street','$city','$state','$pin','$contact','$email', '$aadhar')";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:member.php?status=1');
} else {
    header("location:member.php?status=0");
}
