<?php
require 'book_util.php';
require 'book_search.php';
require 'get_status.php';
$books = fetch_books();

$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 0)
        $message = "Error!";
    else if ($_GET['status'] == 1)
        $message = "Added Successfully!";
    else if ($_GET['status'] == 2)
        $message = "Updated Successfully!";
    else if ($_GET['status'] == 3)
        $message = "Deleted Successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main>
        <table>
            <thead>
                <tr class="top">
                    <td colspan="6"><?= $message ?></td>
                    <td colspan="1">
                        <a href="add_book.php"><button>New Book</button></a>
                    </td>
                </tr>
                <tr>
                    <th class="no">S.No</th>
                    <th class="no">ID</th>
                    <th class="name">Title</th>
                    <th class="name">Publisher</th>
                    <th class="no">Rack</th>
                    <th class="name">Status</th>
                    <th class="details">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($books as $book) { ?>
                    <tr>
                        <td colspan="7">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="sno"><b><?= $a++; echo '.' ?></b></td>
                        <td class="no"><?= $book['book_id'] ?></td>
                        <td class="name"><?= $book['title'] ?></td>
                        <td class="name"><?= fetch_publisher_name($book['publisher_id']) ?></td>
                        <td class="no"><?= $book['rack_no'] ?></td>
                        <td class="name"><?= book_status($book['book_status']) ?></td>
                        <td class="details"><a href="view_book.php?id=<?= $book['book_id'] ?>">View</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>