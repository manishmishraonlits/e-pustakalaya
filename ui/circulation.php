<?php
require 'book_util.php';
require 'book_search.php';
require 'member_util.php';
require 'get_status.php';

$issues = fetch_issues();

$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 0)
        $message = "Error!";
    else if ($_GET['status'] == 1)
        $message = "Issued Successfully!";
        else if ($_GET['status'] == 2)
            $message = "Issue Closed Successfully!";
    //     else if ($_GET['status'] == 3)
    //         $message = "Deleted Successfully!";
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circulation</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require('sidebar.php') ?></aside>
    <main>
        <table>
            <thead>
                <tr class="top">
                    <td colspan="7"><?= $message ?></td>
                    <td colspan="1">
                        <a href="book_issue.php"><button>Issue Book</button></a>
                    </td>
                </tr>
                <tr>
                    <th class="no">S.No</th>
                    <th class="no">ID</th>
                    <th class="name">Book</th>
                    <th class="name">Member</th>
                    <th class="name">Issue Date</th>
                    <th class="name">Return Date</th>
                    <th class="name">Status</th>
                    <th class="name">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $a = 1;
                foreach ($issues as $issue) { ?>
                    <tr>
                        <td colspan="8">
                            <hr>
                        </td>
                    </tr>
                    <tr>
                        <td class="sno"><b><?= $a++;
                                            echo '.' ?></b></td>
                        <td class="no"><?= $issue['transaction_id'] ?></td>
                        <td class="name"><?= fetch_book_name($issue['book_id']) ?></td>
                        <td class="name"><?= fetch_member_name($issue['member_id']) ?></td>
                        <td class="name"><?= $issue['issue_date'] ?></td>
                        <td class="name"><?= $issue['expected_return_date'] ?></td>
                        <td class="name" style="font-weight:bold;"><?= issue_status($issue['issue_status']) ?></td>
                        <?php if ($issue['issue_status'] == 1) { ?>
                            <td class="name"><a href="db_return.php?id=<?= $issue['transaction_id'] ?> & bid=<?= $issue['book_id'] ?>">Return</a></td>
                        <?php } ?>


                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>