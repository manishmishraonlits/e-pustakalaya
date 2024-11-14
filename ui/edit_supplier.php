<?php

require 'book_search.php';
$id = $_GET['uid'];
$supplier = fetch_supplier($id);

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
        <label for="details" class="topic">SUPPLIER DETAILS</label>
        <form class="form" action="db_update_supplier.php?id=<?= $supplier['supplier_id'] ?>" method="post">
            <div class="form-left">
                <label for="name">Supplier Name</label>
                <input type="text" name="name" id="name" value="<?= $supplier['supplier_name'] ?>">
                <label for="address">Address</label>
                <input type="text" name="street" id="street" placeholder="Street" value="<?= $supplier['street'] ?>">
                <label for="state">State</label>
                <input type="text" name="state" id="state" value="<?= $supplier['state'] ?>">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" maxlength="10" value="<?= $supplier['contact'] ?>">
                <br>
                <button>Update</button>
            </div>
            <div class="form-right">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="Seller" <?php if ($supplier['type'] == 'Seller') echo 'selected'; ?>>Seller</option>
                    <option value="Donor" <?php if ($supplier['type'] == 'Donor') echo 'selected'; ?>>Donor</option>
                </select>
                <label for="city">City</label>
                <input type="text" name="city" id="city" value="<?= $supplier['city'] ?>">
                <label for="pin">PIN Code</label>
                <input type="text" name="pin" id="pin" maxlength="6" value="<?= $supplier['pin_code'] ?>">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" value="<?= $supplier['email'] ?>">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>