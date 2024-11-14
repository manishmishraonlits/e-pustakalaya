<?php

require ('connect.php');

$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$website = $_POST['website'];
$gstin = $_POST['gstin'];


$sql = "INSERT INTO publisher(publisher_name, street, city, state, pin_code, contact, email, website, gstin) VALUES ('$name','$street','$city','$state','$pin','$contact','$email','$website','$gstin')";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:publisher.php?status=1');
} else {
    header("location:publisher.php?status=0");
}

