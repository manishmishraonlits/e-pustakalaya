<?php

require('connect.php');

$title = $_POST['title'];
$category = $_POST['category'];
$authors = $_POST['authors'];
$publisher = $_POST['publisher'];
$supplier = $_POST['supplier'];
$isbn_10 = $_POST['isbn-10'];
$isbn_13 = $_POST['isbn-13'];
$pages = $_POST['pages'];
$price = $_POST['price'];
$date = $_POST['date'];
$rack_no = $_POST['rack-no'];


$sql = "INSERT INTO book( title, category_id, publisher_id, isbn_10, isbn_13, pages, price, entry_date, rack_no, supplier_id, book_status) VALUES('$title','$category', '$publisher','$isbn_10','$isbn_13','$pages','$price','$date','$rack_no', '$supplier','1')";

$result = mysqli_query($connection, $sql);

$book_id = $connection->insert_id;

foreach($authors as $author) {
    $sql = "INSERT INTO book_authors(book_id, author_id) VALUES($book_id, $author)";
    $result = mysqli_query($connection, $sql);
}

if ($result > 0) {
    header('location:book.php?status=1');
} else {
    header("location:book.php?status=0");
}
