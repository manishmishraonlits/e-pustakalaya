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
        <form class="form" action="db_add_publisher.php" method="post">
            <div class="form-left">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" required>
                <label for="city">Address</label>
                <input type="text" name="street" id="street" placeholder="Street">

                <label for="state">State</label>
                <input type="text" name="state" id="state">
                <label for="contact">Contact</label>
                <input type="text" name="contact" id="contact" maxlength="10">
                <label for="website">Website</label>
                <input type="text" name="website" id="website">
                <br>
                <button>Submit</button>
            </div>
            <div class="d-form-right">
                <label for="city">City</label>
                <input type="text" name="city" id="city">
                <label for="pin">PIN Code</label>
                <input type="text" name="pin" id="pin" maxlength="6">
                <label for="email">Email</label>
                <input type="email" name="email" id="email">
                <label for="gstin">GSTIN</label>
                <input type="text" name="gstin" id="gstin" maxlength="15">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>