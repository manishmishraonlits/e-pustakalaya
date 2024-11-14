<?php
require 'book_util.php';
$publishers = fetch_publishers();

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
                    <td colspan="5"><?= $message ?></td>
                    <td colspan="1">
                        <a href="add_publisher.php"><button>New Publisher</button></a>
                    </td>
                </tr>
                <tr>
                    <th class="no">S.No</th>
                    <th class="no">ID</th>
                    <th class="name">Name</th>
                    <th class="email">Email</th>
                    <th class="email">Website</th>
                    <th class="details">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1; foreach ($publishers as $publisher) { ?>
                    <tr>
                        <td colspan="6">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="sno"><b><?= $a++; echo '.' ?></b></td>
                        <td class="no"><?= $publisher['publisher_id'] ?></td>
                        <td class="name"><?= $publisher['publisher_name'] ?></td>
                        <td class="email"><?= $publisher['email'] ?></td>
                        <td class="email"><?= $publisher['website'] ?></td>
                        <td class="details"><a href="view_publisher.php?id=<?= $publisher['publisher_id'] ?>">View</a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>