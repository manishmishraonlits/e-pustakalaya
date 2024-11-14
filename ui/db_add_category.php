<?php

require 'connect.php';

$name = $_POST['name'];

$sql = "INSERT INTO category(category) VALUES ('$name')";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:category.php?status=1');
} else {
    header("location:category.php?status=0");
}
