<?php

require('connect.php');

$id = $_GET['id'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$type = $_POST['type'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$email = $_POST['email'];

$sql = "UPDATE supplier SET supplier_name = '$name', street = '$street', city = '$city', state = '$state', type = '$type', pin_code = '$pin', contact = '$contact', email = '$email' WHERE supplier_id = '$id'";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:supplier.php?status=2');
}
