<?php

require 'connect.php';

$id = $_POST['id'];
$name = $_POST['name'];

$sql = "UPDATE category SET category = '$name' WHERE category_id = $id";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:category.php?status=2');
} else {
    header("location:category.php?status=0");
}
