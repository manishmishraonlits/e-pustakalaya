<?php

require 'connect.php';

$id = $_GET['did'];

$sql = "DELETE FROM author WHERE author_id = $id";
$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:author.php?status=3');
} else {
    header("location:author.php?status=0");
}