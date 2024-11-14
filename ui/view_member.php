<?php

require 'member_util.php';

$id = $_GET['id'];
$member = fetch_member($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main class="view">
        <div id="view">
            <h2>MEMBER DETAILS</h2>
            <table class="t-view">
                <tr>
                    <td>Id</td>
                    <td><?= $member['member_id']?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?= $member['member_name'] ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?= $member['contact'] ?></td>
                </tr>
                <tr>
                    <td>Aadhar ID</td>
                    <td><?= $member['aadhar'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $member['email'] ?></td>
                </tr>
                <tr>
                    <td>Street</td>
                    <td><?= $member['street'] ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?= $member['city'] ?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?= $member['state'] ?></td>
                </tr>
                <tr>
                    <td>PIN Code</td>
                    <td><?= $member['pin_code'] ?></td>
                </tr>
                <tr>                                    
                    <td><button class="edit"><a href="edit_member.php?uid=<?= $member['member_id']?>">Edit</a></button></td>
                    <td></td>
                </tr>
            </table>
            <br>
        </div>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>