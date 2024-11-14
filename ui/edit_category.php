<?php

require 'book_search.php';
$eid = $_GET['eid'];
$category = fetch_category_name($eid);

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
        <label for="details" class="topic">CATEGORY DETAILS</label>
        <form class="form" action="db_update_category.php" method="post">
            <input type="hidden" name="id" id="id" value="<?= $eid ?>">
            <div class="form-left">
                <label for="name">Category</label>
                <input type="text" name="name" id="name" value="<?=$category?>" required>
                <br>
                <button type="submit">Update</button>
            </div>

        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>