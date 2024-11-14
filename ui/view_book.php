<?php

require 'book_search.php';
require 'get_status.php';

$id = $_GET['id'];
$book = fetch_book($id);
$authors = fetch_author($id);
$delete = check_for_delete($id);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Book</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require 'sidebar.php' ?></aside>
    <main class="view">
        <div id="view">
            <h2>BOOK DETAILS</h2>
            <table class="t-view">
                <tr>
                    <td>ID</td>
                    <td><?= $book['book_id'] ?></td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td><?= $book['title'] ?></td>
                </tr>
                <tr>
                    <td>Publisher</td>
                    <td><?= fetch_publisher_name($book['publisher_id']) ?></td>
                </tr>
                <tr>
                    <td>Author</td>
                    <td><?php $a = 1;
                        foreach ($authors as $author) { ?>
                            <?php if ($a > 1) {
                                echo ", ";
                            }
                            fetch_author_name($author['author_id']);
                            $a++; ?>
                        <?php  } ?>
                    </td>
                </tr>
                <tr>
                    <td>Supplier</td>
                    <td><?= fetch_supplier_name($book['supplier_id']) ?></td>
                </tr>
                <tr>
                    <td>Category</td>
                    <td><?= fetch_category_name($book['category_id']) ?></td>
                </tr>
                <tr>
                    <td>ISBN-10</td>
                    <td><?= $book['isbn_10'] ?></td>
                </tr>
                <tr>
                    <td>ISBN-13</td>
                    <td><?= $book['isbn_13'] ?></td>
                </tr>
                <tr>
                    <td>Pages</td>
                    <td><?= $book['pages'] ?></td>
                </tr>
                <tr>
                    <td>Price</td>
                    <td><?= $book['price'] ?></td>
                </tr>
                <tr>
                    <td>Entry Date</td>
                    <td><?= $book['entry_date'] ?></td>
                </tr>
                <tr>
                    <td>Rack No.</td>
                    <td><?= $book['rack_no'] ?></td>
                </tr>
                <tr>
                    <td><button class="edit"><a href="edit_book.php?uid=<?= $book['book_id'] ?>">Edit</a></button></td>
                    <td><?php if ($delete == 1) { ?>
                    </td>
                <?php } else { ?>
                    <button class="delete"><a href="db_delete_book.php?did=<?= $book['book_id'] ?>">Delete</a></button>
                <?php } ?>
                </tr>
            </table>
            <br>
        </div>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>