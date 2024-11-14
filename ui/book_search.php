<?php

function fetch_author(int $id)
{
    require 'connect.php';
    $sql = "SELECT * FROM book_authors WHERE book_id = $id";
    $result = mysqli_query($connection, $sql);
    $author = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $author;
}

function fetch_author_name(int $id)
{
    require 'connect.php';
    $sql = "SELECT author_name FROM author WHERE author_id = $id";
    $result = mysqli_query($connection, $sql);
    $author = mysqli_fetch_assoc($result);
    echo $author['author_name'];
}

function fetch_publisher(int $id)
{
    require 'connect.php';
    $sql = "SELECT * FROM publisher WHERE publisher_id = $id";
    $result = mysqli_query($connection, $sql);
    $publisher = mysqli_fetch_assoc($result);
    return $publisher;
}

function fetch_publisher_name(int $id)
{
    require 'connect.php';
    $sql = "SELECT publisher_name FROM publisher WHERE publisher_id = $id";
    $result = mysqli_query($connection, $sql);
    $publisher = mysqli_fetch_assoc($result);
    return $publisher['publisher_name'];
}

function fetch_supplier(int $id)
{
    require 'connect.php';
    $sql = "SELECT * FROM supplier WHERE supplier_id = $id";
    $result = mysqli_query($connection, $sql);
    $supplier = mysqli_fetch_assoc($result);
    return $supplier;
}

function fetch_supplier_name(int $id)
{
    require 'connect.php';
    $sql = "SELECT supplier_name FROM supplier WHERE supplier_id = $id";
    $result = mysqli_query($connection, $sql);
    $supplier = mysqli_fetch_assoc($result);
    return $supplier['supplier_name'];
}

function fetch_category_name(int $id)
{
    require 'connect.php';
    $sql = "SELECT * FROM category WHERE category_id = $id";
    $result = mysqli_query($connection, $sql);
    $category = mysqli_fetch_assoc($result);
    return $category['category'];
}

function fetch_book(int $id)
{
    require 'connect.php';
    $sql = "SELECT * FROM book WHERE book_id = $id";
    $result = mysqli_query($connection, $sql);
    $book = mysqli_fetch_assoc($result);
    return $book;
}

function fetch_book_name(int $id)
{
    require 'connect.php';
    $sql = "SELECT title FROM book WHERE book_id = $id";
    $result = mysqli_query($connection, $sql);
    $book = mysqli_fetch_assoc($result);
    return $book['title'];
}



function fetch_opac($id)
{
    require ('connect.php');
    $sql = "SELECT * FROM book WHERE title LIKE '$id%'";
    $result = mysqli_query($connection, $sql);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $books;
}

function count_book()
{
    require 'connect.php';
    $sql = "SELECT COUNT(book_id) FROM book";
    $result = mysqli_query($connection, $sql);
    // $book = mysqli_fetch_assoc($result)['COUNT(book_id)'];
    // return $book;
    return mysqli_fetch_array($result)[0];
}


function count_book_out()
{
    require 'connect.php';
    $sql = "SELECT COUNT(transaction_id) FROM book_issue";
    $result = mysqli_query($connection, $sql);
    // $book = mysqli_fetch_assoc($result)['COUNT(book_id)'];
    // return $book;
    return mysqli_fetch_array($result)[0];
}