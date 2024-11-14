<?php


function issue_status($id)
{
    if ($id == 1) {
        echo "Active";
    } else {
        echo "Closed";
    }
}


function book_status($id)
{
    if ($id == 1) {
        echo "Available";
    } else {
        echo "Issued";
    }
}

function check_status($id)
{
    require 'connect.php';
    $sql = "SELECT book_status FROM book WHERE book_id = $id";
    $result = mysqli_query($connection, $sql);
    $book = mysqli_fetch_assoc($result);
    if ($book['book_status'] == 1) {
        return 1;
    } else
        return 0;
}

function  check_for_delete($id)
{
    require 'connect.php';
    $sql = "SELECT * FROM book_issue WHERE book_id = $id";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        return 1;
    } else {
        return 0;
    }
}

function author_delete($id)
{
    require 'connect.php';
    $sql = "SELECT * FROM book_authors WHERE author_id = $id";
    $result = mysqli_query($connection, $sql);
    if (mysqli_num_rows($result) > 0) {
        return 1;
    } else {
        return 0;
    }
}
