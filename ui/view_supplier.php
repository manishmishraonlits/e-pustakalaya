<?php

require 'book_search.php';

$id = $_GET['id'];
$supplier = fetch_supplier($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Supplier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main class="view">
        <div id="view">
            <h2>SUPPLIER DETAILS</h2>
            <table class="t-view">
                <tr>
                    <td>Id</td>
                    <td><?= $supplier['supplier_id']?></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><?= $supplier['supplier_name'] ?></td>
                </tr>
                <tr>
                    <td>Contact</td>
                    <td><?= $supplier['contact'] ?></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><?= $supplier['email'] ?></td>
                </tr>
                <tr>
                    <td>Street</td>
                    <td><?= $supplier['street'] ?></td>
                </tr>
                <tr>
                    <td>Type</td>
                    <td><?= $supplier['type'] ?></td>
                </tr>
                <tr>
                    <td>City</td>
                    <td><?= $supplier['city'] ?></td>
                </tr>
                <tr>
                    <td>State</td>
                    <td><?= $supplier['state'] ?></td>
                </tr>
                <tr>
                    <td>PIN Code</td>
                    <td><?= $supplier['pin_code'] ?></td>
                </tr>
                <tr>                                    
                    <td><button class="edit"><a href="edit_supplier.php?uid=<?= $supplier['supplier_id']?>">Edit</a></button></td>
                    <td></td>
                </tr>
            </table>
            <br>
        </div>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>