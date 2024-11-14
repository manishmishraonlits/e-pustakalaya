<?php

require('connect.php');

$id = $_GET['id'];
$name = $_POST['name'];
$street = $_POST['street'];
$city = $_POST['city'];
$state = $_POST['state'];
$pin = $_POST['pin'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$aadhar = $_POST['aadhar'];


$sql = "UPDATE member SET member_name='$name', street='$street', city='$city', state='$state', pin_code='$pin', contact='$contact', email='$email', aadhar='$aadhar' WHERE member_id = $id";


$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:member.php?status=2');
// } else {
//     header("location:layout.php?status=0");
}