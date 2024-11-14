<?php

require 'connect.php';

$name = $_POST['name'];

$sql = "INSERT INTO author(author_name) VALUES ('$name')";

$result = mysqli_query($connection, $sql);

if ($result > 0) {
    header('location:author.php?status=1');
} else {
    header("location:author.php?status=0");
}
