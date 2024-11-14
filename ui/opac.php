<?php
require 'book_search.php';
require 'book_util.php';
require 'get_status.php';
$books = fetch_books();

// $books = NULL;

if (isset($_POST['search'])) {
    $id = $_POST['title'];
    $books = fetch_opac($id);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <style>
        main input {
            width: 60%;
            font-size: x-small;
            border-radius: 10px;
            padding: 10px;
            outline: none;
        }

        button {
            width: 120px;
            padding: 5px;
            border-radius: 10px;
            border: 1px solid black;
            cursor: pointer;
        }
    </style>
    <title>OPAC</title>
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main>
        <form method="post">
            <h2>OPAC (Online Public Access Catalog)</h2>
            <input type="text" class="title" name="title" placeholder="Search by book title...">
            <button name='search'>Search</button>
        </form>
<br><br>
        <table>
            <thead>
                <tr>
                    <th class="no">S.No</th>
                    <th class="name">Title</th>
                    <th class="name">Publisher</th>
                    <th class="name">Status</th>
                    <th class="name">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($books as $book) { ?>
                    <tr>
                        <td colspan="5">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="sno"><b><?= $a++; echo '.' ?></b></td>
                        <td class="name"><?= $book['title'] ?></td>
                        <td class="name"><?= fetch_publisher_name($book['publisher_id']) ?></td>
                        <td class="name"><?= book_status($book['book_status']) ?></td>
                        <td class="name"><button class="status">Request</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </main>

    <footer><?php require('footer.php') ?></footer>
</body>

</html>