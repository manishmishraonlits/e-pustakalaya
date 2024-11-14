<?php
require 'book_util.php';
require 'get_status.php';
$authors = fetch_authors();

$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 0)
        $message = "Error!";
    else if ($_GET['status'] == 1)
        $message = "Added Successfully!";
    else if ($_GET['status'] == 3)
        $message = "Deleted Successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publishers</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main>
        <table>
            <thead>
                <tr class="top">
                    <td colspan="3"><?= $message ?></td>
                    <td colspan="1">
                        <a href="add_author.php"><button>New Author</button></a>
                    </td>
                </tr>
                <tr>
                    <th class="no">S.No</th>
                    <th class="no">ID</th>
                    <th class="email">Name</th>
                    <th class="details">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($authors as $author) { ?>
                    <tr>
                        <td colspan="5">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="sno"><b><?= $a++; echo "." ?></b></td>
                        <td class="no"><?= $author['author_id'] ?></td>
                        <td class="email"><?= $author['author_name'] ?></td>
                        <td class="details"><button class="author"><a href="edit_author.php?uid=<?= $author['author_id'] ?>" style="color: blue;">Edit </a></button><?php if (author_delete($author['author_id']) > 0) {} else { ?>
                                <button class="author"><a href="db_delete_author.php?did=<?= $author['author_id'] ?>" style="color: red;"> Delete</a></button><?php } ?></td>                    
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>