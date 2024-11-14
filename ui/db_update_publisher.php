<?php

require 'connect.php';

$id =  $_GET['id'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$website = $_POST['website'];
$gstin = $_POST['gstin'];

$sql = "UPDATE publisher SET publisher_name='$name', street='$street', city='$city', state='$state', pin_code='$pin', contact='$contact', email='$email', website='$website', gstin='$gstin' WHERE publisher_id = $id";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:publisher.php?status=2');
}