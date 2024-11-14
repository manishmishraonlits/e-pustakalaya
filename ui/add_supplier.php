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
        <form class="form" action="db_add_supplier.php" method="post">
            <div class="form-left">
                <label for="name">Supplier Name</label>
                <input type="text" name="name" id="name" required>
                <label for="address">Address</label>
                <input type="text" name="street" id="street" placeholder="Street" required>
                <label for="state">State</label>
                <input type="text" name="state" id="state" required>
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" maxlength="10" required>
                <br>
                <button>Submit</button>
            </div>
            <div class="form-right">
                <label for="type">Type</label>
                <select name="type" id="type">
                    <option value="Seller">Seller</option>
                    <option value="Donor">Donor</option>
                </select>
                <label for="city">City</label>
                <input type="text" name="city" id="city" required>
                <label for="pin">PIN Code</label>
                <input type="text" name="pin" id="pin" maxlength="6" required>
                <label for="email">Email</label>
                <input type="email" name="email" id="email" required> 
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>