<?php
require_once 'book_util.php';
$publishers = fetch_publishers();
$suppliers = fetch_suppliers();
$authors = fetch_authors();
$results = fetch_category();

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
        <label for="details" class="topic">BOOK DETAILS</label>

        <form class="form" action="db_add_book.php" method="post">
            <div class="form-left">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" required>
                <label for="isbn-10">ISBN-10</label>
                <input type="text" name="isbn-10" minlength="10" maxlength="10" required>
                <label for="isbn-13">ISBN-13</label>
                <input type="text" name="isbn-13" minlength="13" maxlength="13">
                <label for="pages">Pages</label>
                <input type="number" name="pages" required>
                <label for="price">Price</label>
                <input type="number" name="price" required>
                <label for="entry">Date</label>
                <input type="date" name="date" required>
                <br>
                <button type="submit">Submit</button>
            </div>
            <div class="form-right">
                <label for="category">Category</label>
                <select name="category" id="category" required>
                    <option value="" hidden>Select</option>
                    <?php foreach ($results as $category) { ?>
                        <option value="<?= $category['category_id'] ?>"><?= $category['category'] ?></option>
                    <?php } ?>
                </select>
                <label for="publisher">Publisher</label>
                <select name="publisher" id="publisher" required>
                    <option value="" hidden>Select</option>
                    <?php foreach ($publishers as $publisher) { ?>
                        <option value="<?= $publisher['publisher_id'] ?>"><?= $publisher['publisher_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="author">Author</label>
                <select name="authors[]" id="authors" required multiple>
                    <option value="" hidden>Select</option>
                    <?php foreach ($authors as $author) { ?>
                        <option value="<?= $author['author_id'] ?>"><?= $author['author_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="supplier">Supplier</label>
                <select name="supplier" id="supplier" required>
                <option value="" hidden>Select</option>
                    <?php foreach ($suppliers as $supplier) { ?>
                        <option value="<?= $supplier['supplier_id'] ?>"><?= $supplier['supplier_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="rack">Rack No.</label>
                <input type="number" name="rack-no" required>
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
    
</body>

</html>