<?php

require('connect.php');

$id = $_GET['id'];
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


$sql = "UPDATE book SET  title = '$title',category_id = '$category', publisher_id = '$publisher', isbn_10 ='$isbn_10', isbn_13 ='$isbn_13', pages = '$pages', price = '$price', entry_date ='$date', rack_no ='$rack_no', supplier_id ='$supplier' WHERE book_id = $id";

$result = mysqli_query($connection, $sql);


$sql = "SELECT * FROM book_authors WHERE book_id = $id";
$result = mysqli_query($connection, $sql);

if (mysqli_num_rows($result) > 0) {
    $sql = "DELETE FROM book_authors WHERE book_id = $id";
    mysqli_query($connection, $sql);
    foreach ($authors as $author) {
        $sql = "INSERT INTO book_authors(book_id, author_id) VALUES ($id, $author)";
        $result = mysqli_query($connection, $sql);
    }
} else {
    foreach ($authors as $author) {
        $sql = "INSERT INTO book_authors(book_id, author_id) VALUES ($id, $author)";
        $result = mysqli_query($connection, $sql);
    }
}
header('location:book.php?status=2');
