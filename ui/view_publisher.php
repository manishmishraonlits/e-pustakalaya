<?php

require 'book_search.php';

$id = $_GET['id'];
$publisher = fetch_publisher($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main class="view">
        <div id="view">
            <h2>PUBLISHER DETAILS</h2>
            <table class="t-view">
                <tr>
                    <td>Id</td>
                    <td><?= $publisher['publisher_id']?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?= $publisher['publisher_name'] ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?= $publisher['contact'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $publisher['email'] ?></td>
                </tr>
                <tr>
                    <td>Street</td>
                    <td><?= $publisher['street'] ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?= $publisher['city'] ?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?= $publisher['state'] ?></td>
                </tr>
                <tr>
                    <td>PIN Code</td>
                    <td><?= $publisher['pin_code'] ?></td>
                </tr>
                <tr>                                    
                    <td><button class="edit"><a href="edit_publisher.php?uid=<?= $publisher['publisher_id']?>">Edit</a></button></td>
                    <td></td>
                </tr>
            </table>
            <br>
        </div>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>