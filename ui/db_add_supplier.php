<?php

require('connect.php');

$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$type = $_POST['type'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$sql = "INSERT INTO supplier(supplier_name, contact, email, type, street, city, state, pin_code) VALUES ('$name','$contact','$email','$type','$street','$city','$state','$pin')";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:supplier.php?status=1');
} else {
    header("location:supplier.php?status=0");
}