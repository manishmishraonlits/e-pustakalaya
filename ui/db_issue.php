<?php

require 'connect.php';
require 'get_status.php';

$book = $_POST['book'];
$member = $_POST['member'];
$return = $_POST['return'];

$status = check_status($book);

if ($status == 1) {
    $sql = "INSERT INTO book_issue(book_id, member_id, issue_date, expected_return_date, issue_status) VALUES ('$book','$member',CURDATE(),'$return', '1')";
    $result = mysqli_query($connection, $sql);

    $sql = "UPDATE book SET book_status = '0' WHERE book_id = $book";
    mysqli_query($connection, $sql);


    if ($result > 0) {
        header('location:circulation.php?status=1');
    } else {
        header("location:circulation.php?status=0");
    }
}

else{
    header("location:book_issue.php?status=0");
}