<?php

require 'connect.php';
$id = $_GET['did'];

$sql = "DELETE FROM supplier WHERE supplier_id = $id";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:supplier.php?status=3');
} else {
    header("location:publisher.php?status=0");
}