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
        <form class="publisher">
            <div class="publisher-left">
                <label for="name">Name</label>
                <input type="text">
                <label for="address">Address</label>
                <input type="text" placeholder="Street">
                <label for="state">State</label>
                <input type="text">
                <label for="contact">Contact</label>
                <input type="text" maxlength="10">
                <label for="website">Website</label>
                <input type="text">
                <br>
                <button>Submit</button>
            </div>
            <div class="publisher-right">
                <label for="city">City</label>
                <input type="text">
                <label for="pin">PIN Code</label>
                <input type="text" maxlength="6">
                <label for="email">Email</label>
                <input type="email">
                <label for="gstin">GSTIN</label>
                <input type="text" maxlength="15">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>