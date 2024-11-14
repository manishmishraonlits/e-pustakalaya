<?php

$id = $_GET['id'];
require 'connect.php';
$sql = "SELECT title FROM book WHERE book_id = $id";
$result = mysqli_query($connection, $sql);
if (mysqli_num_rows($result) > 0) {
    $book = mysqli_fetch_assoc($result);
    echo $book['title'];
}

else{
    echo "Invalid Book ID!";
}