<?php

require 'connect.php';

$id = $_GET['did'];

$sql = "DELETE FROM category WHERE category_id = $id";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:category.php?status=3');
} else {
    header("location:category.php?status=0");
}