<?php
function fetch_publishers()
{
    require 'connect.php';
    $sql = "SELECT * FROM publisher";
    $result = mysqli_query($connection, $sql);
    $publishers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $publishers;

}

function fetch_suppliers()
{
    require ('connect.php');
    $sql = "SELECT * FROM supplier";
    $result = mysqli_query($connection, $sql);
    $suppliers = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $suppliers;
}

function fetch_authors()
{
    require ('connect.php');
    $sql = "SELECT * FROM author";
    $result = mysqli_query($connection, $sql);
    $authors = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $authors;
}

function fetch_books()
{
    require ('connect.php');
    $sql = "SELECT * FROM book";
    $result = mysqli_query($connection, $sql);
    $books = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $books;
}

function fetch_issues(){
    require ('connect.php');
    $sql = "SELECT * FROM book_issue";
    $result = mysqli_query($connection, $sql);
    $issues = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $issues;
}

function fetch_category()
{
    require ('connect.php');
    $sql = "SELECT * FROM category";
    $result = mysqli_query($connection, $sql);
    $category = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $category;
}