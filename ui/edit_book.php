<?php
require 'book_util.php';
require 'book_search.php';
$id = $_GET['uid'];

$publishers = fetch_publishers();
$suppliers = fetch_suppliers();
$authors = fetch_authors();
$book_authors = fetch_author($id);
$book = fetch_book($id);
$categories = fetch_category();
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

        <form class="form" action="db_update_book.php?id=<?= $book['book_id'] ?>" method="post">
            <div class="form-left">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" value="<?= $book['title'] ?>">
                <label for="isbn-10">ISBN-10</label>
                <input type="text" name="isbn-10" minlength="10" maxlength="10" value="<?= $book['isbn_10'] ?>">
                <label for="isbn-13">ISBN-13</label>
                <input type="text" name="isbn-13" minlength="13" maxlength="13" value="<?= $book['isbn_13'] ?>">
                <label for="pages">Pages</label>
                <input type="number" name="pages" value="<?= $book['pages'] ?>">
                <label for="price">Price</label>
                <input type="number" name="price" value="<?= $book['price'] ?>">
                <label for="entry">Date</label>
                <input type="date" name="date" value="<?= $book['entry_date'] ?>">
                <br>
                <button type="submit">Update</button>
            </div>
            <div class="form-right">
                <label for="category">Category</label>
                <select name="category" id="category">
                    <?php
                    foreach ($categories as $category) { ?>
                        <option value="<?= $category['category_id'] ?>"
                            <?php if ($category['category_id'] == $book['category_id']) echo "selected" ?>><?= $category['category'] ?></option>
                    <?php } ?>
                </select>
                <label for="publisher">Publisher</label>
                <select name="publisher" id="publisher">
                    <?php
                    foreach ($publishers as $publisher) { ?>
                        <option value="<?= $publisher['publisher_id'] ?>"
                            <?php if ($publisher['publisher_id'] == $book['publisher_id']) echo "selected" ?>><?= $publisher['publisher_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="authors">Author</label>
                <select name="authors[]" id="authors" multiple>
                    <?php foreach ($authors as $author) { ?>
                        <option value="<?= $author['author_id'] ?>"

                            <?php
                            foreach ($book_authors as $book_author) {
                                if ($author['author_id'] == $book_author['author_id']) echo "selected";
                            } ?>><?= $author['author_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="supplier">Supplier</label>
                <select name="supplier" id="supplier">
                    <?php foreach ($suppliers as $supplier) { ?>
                        <option value="<?= $supplier['supplier_id'] ?>"
                            <?php if ($supplier['supplier_id'] == $book['supplier_id']) echo "selected" ?>><?= $supplier['supplier_name'] ?></option>
                    <?php } ?>
                </select>
                <label for="rack">Rack No.</label>
                <input type="number" name="rack-no" value="<?= $book['rack_no'] ?>">
            </div>
        </form>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>