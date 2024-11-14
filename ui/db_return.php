<?php

require 'connect.php';

$book = $_GET['bid'];
$id = $_GET['id'];

$sql = "UPDATE book SET book_status = '1' WHERE book_id = $book";
mysqli_query($connection, $sql);

$sql = "UPDATE book_issue SET issue_status = '0' WHERE transaction_id = $id";
mysqli_query($connection, $sql);


header('location:circulation.php?status=2');
