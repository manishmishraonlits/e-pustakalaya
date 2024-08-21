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
        <form class="member">
            <div class="member-left">
                <label for="name">Name</label>
                <input type="text">
                <label for="address">Address</label>
                <input type="text" placeholder="Street">
                <label for="state">State</label>
                <input type="text">
                <label for="contact">Contact</label>
                <input type="text" maxlength="10">
                <br>
                <button>Submit</button>
            </div>
            <div class="member-right">
                <label for="city">City</label>
                <input type="text">
                <label for="pin">PIN Code</label>
                <input type="text" maxlength="6">
                <label for="email">Email</label>
                <input type="email">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>