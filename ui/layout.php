<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location:index.php?status=3");
}

require 'book_search.php';
require 'book_util.php';
require 'member_util.php';
$book = count_book();
$member = count_member();
$out = count_book_out();
$in = $book - $out;
$issues = fetch_issues();
 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ePustakalaya</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require 'sidebar.php' ?></aside>
    <main class="home">
        <div class="card-1">
            <h3>Books</h3>
            <hr>
            <h1><?= $book ?></h1>
        </div>
        <div class="card-1">
            <h3>Members</h3>
            <hr>
            <h1><?= $member ?></h1>

        </div>
        <div class="card-1">
            <h3>In</h3>
            <hr>
            <h1><?= $in ?></h1>
        </div>
        <div class="card-1">
            <h3>Out</h3>
            <hr>
            <h1><?= $out ?></h1>
        </div>
        <div class="card-1">
            <h3>Active</h3>
            <hr>
            <h1><?= $member ?></h1>
        </div>

        <div class="card-2">
            <h3>Today Return</h3>
            <hr>
            <table>
                <thead>
                    <th>S.No</th>
                    <th>Book ID</th>
                    <th>Member ID</th>
                    <th>Date</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php $a = 1;
                    foreach ($issues as $issue) { ?>
                        <tr>
                            <td colspan="8">
                                <hr>
                            </td>
                        </tr>
                        <tr>
                            <td ><b><?= $a++;
                                                echo '.' ?></b></td>
                            <td ><?= $issue['book_id'] ?></td>
                            <td ><?= $issue['member_id'] ?></td>
                            <td ><?= $issue['expected_return_date'] ?></td>
                            <td ><a href="">View</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

        <div class="card-2">
            <h3>Request</h3>
            <hr>
        </div>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>