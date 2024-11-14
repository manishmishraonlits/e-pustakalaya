<?php

require 'member_util.php';

$id = $_GET['uid'];
$member = fetch_member($id);

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
        <label for="details" class="topic">MEMBER DETAILS</label>
        <form class="form" action="db_update_member.php?id=<?= $member['member_id']?>" method="post">
            <div class="form-left">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?= $member['member_name']?>">
                <label for="address">Address</label>
                <input type="text" name="street" id="street" placeholder="Street" value="<?= $member['street']?>">
                <label for="state">State</label>
                <input type="text" name="state" id="state" value="<?= $member['state']?>">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" maxlength="10" value="<?= $member['contact']?>">
                <br>
                <button>Update</button>
            </div>
            <div class="form-right">
                <label for="city">City</label>
                <input type="text" name="city" id="city" value="<?= $member['city']?>">
                <label for="pin">PIN Code</label>
                <input type="text" name="pin" id="pin" maxlength="6" value="<?= $member['pin_code']?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $member['email']?>">
                <label for="aadhar">Aadhar ID</label>
                <input type="aadhar" name="aadhar" id="aadhar" maxlength="12" value="<?= $member['aadhar']?>">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>