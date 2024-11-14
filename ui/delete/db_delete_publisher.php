<?php

require 'connect.php';
$id = $_GET['did'];

$sql = "DELETE FROM publisher WHERE publisher_id = $id";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:publisher.php?status=3');
} else {
    header("location:publisher.php?status=0");
}