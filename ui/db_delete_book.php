<?php

require 'connect.php';
$id = $_GET['did'];

$sql = "DELETE FROM book_authors WHERE book_id = $id";
$result = mysqli_query($connection, $sql);

$sql = "DELETE FROM book WHERE book_id = $id";
$result = mysqli_query($connection, $sql);

header('location:book.php?status=3');

