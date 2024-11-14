<?php

$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 0)
        $message = "Book already issued!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Issue</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="main-grid-container">
    <header><?php require 'header.php' ?></header>
    <aside><?php require 'sidebar.php' ?></aside>
    <main>
        <label for="details" class="topic">BOOK ISSUE</label>
        <form class="form" action="db_issue.php" method="post">
            <div class="form-left">
                <label for="book">Book ID</label>
                <input type="text" name="book" id="book" onblur="getBook(this.value)">
                <label for="title">Title</label>
                <input type="text" name="title" id="title" readonly>
                <label for="duration">Duration</label>
                <select name="duration" id="duration" onchange="calculateDate(this.value)">
                    <option value="">Select</option>
                    <option value="15">15</option>
                    <option value="20">20</option>
                    <option value="30">30</option>
                </select>
                <br>
                <button>Submit</button>
            </div>
            <div class="form-right">
                <label for="member">Member ID</label>
                <input type="text" name="member" id="member" onblur="getMember(this.value)">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" readonly>
                <label for="return">Return By Date </label>
                <input type="date" name="return" id="return" required>

            </div>
            <h5 style="text-align: center; color:red"><?= $message ?></h5>
        </form>
    </main>
    <footer><?php require 'footer.php' ?></footer>

    <script>
        function getBook(bookId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('title').value = this.responseText;
                }
            }
            xhr.open('GET', 'get_book.php?id=' + bookId, true);
            xhr.send();
        }

        function getMember(memberId) {
            const xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('name').value = this.responseText;
                }

            }
            xhr.open('GET', 'get_member.php?id=' + memberId, true);
            xhr.send();
        }

        function calculateDate(value) {
            const returnDate = new Date();
            returnDate.setDate(returnDate.getDate() + Number(value));
            let day = returnDate.getDate();
            if (day < 10) {
                day = '0' + day;
            }
            let month = returnDate.getMonth() + 1;
            if (month < 10) {
                month = '0' + month;
            }
            const year = returnDate.getFullYear();
            const returnDateString = year + "-" + month + "-" + day;
            document.getElementById('return').value = returnDateString;
        }
    </script>
</body>

</html>