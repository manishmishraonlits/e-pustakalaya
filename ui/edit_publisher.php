<?php

require 'book_search.php';

$id = $_GET['uid'];
$publisher = fetch_publisher($id);

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
    <aside><?php require('sidebar.php') ?></aside>
    <main>
        <label for="details" class="topic">PUBLISHER DETAILS</label>
        <form class="form" action="db_update_publisher.php?id=<?= $publisher['publisher_id']?>" method="post">
            <div class="form-left">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?= $publisher['publisher_name']?>">
                <label for="city">Address</label>
                <input type="text" name="street" id="street" placeholder="Street" value="<?= $publisher['street']?>">

                <label for="state">State</label>
                <input type="text" name="state" id="state" value="<?= $publisher['state']?>">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" maxlength="10" value="<?= $publisher['contact']?>">
                <label for="website">Website</label>
                <input type="text" name="website" id="website" value="<?= $publisher['website']?>">
                <br>
                <button>Update</button>
            </div>
            <div class="d-form-right">
                <label for="city">City</label>
                <input type="text" name="city" id="city" value="<?= $publisher['city']?>">
                <label for="pin">PIN Code</label>
                <input type="text" name="pin" id="pin" maxlength="6" value="<?= $publisher['pin_code']?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $publisher['email']?>">
                <label for="gstin">GSTIN</label>
                <input type="text" name="gstin" id="gstin" maxlength="15" value="<?= $publisher['gstin']?>">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>