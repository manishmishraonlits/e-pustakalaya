<?php
require 'book_util.php';
$results = fetch_category();

$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 0)
        $message = "Error!";
    else if ($_GET['status'] == 1)
        $message = "Added Successfully!";
    else if ($_GET['status'] == 2)
        $message = "Updated Successfully!";
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
                        <a href="add_category.php"><button>New Category</button></a>
                    </td>
                </tr>
                <tr>
                    <th class="no">S.No</th>
                    <th class="no">ID</th>
                    <th class="email">Category</th>
                    <th class="details">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1; foreach ($results as $category) {?>
                    <tr>
                        <td colspan="4">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="sno"><b><?= $a++; echo "." ?></b></td>
                        <td class="no"><?= $category['category_id'] ?></td>
                        <td class="email"><?= $category['category'] ?></td>
                        <td class="email"><a href="edit_category.php?eid=<?= $category['category_id'] ?>">Edit</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>