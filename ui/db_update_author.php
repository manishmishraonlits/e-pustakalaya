<?php

require 'connect.php';

$id = $_GET['uid'];
$name = $_POST['name'];

$sql = "UPDATE author SET author_name = '$name' WHERE author_id = '$id' ";
$result = mysqli_query($connection, $sql);


    header('location:author.php?status=2');
