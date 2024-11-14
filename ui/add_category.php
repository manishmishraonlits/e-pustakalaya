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
        <label for="details" class="topic">CATEGORY DETAILS</label>
        <form class="form" action="db_add_category.php" method="post">
            <div class="form-left">
                <label for="name">Category</label>
                <input type="text" name="name" id="name" required>
                <br>
                <button type="submit">Submit</button>
            </div>

        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>