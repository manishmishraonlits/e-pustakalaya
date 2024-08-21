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
        <form class="book">
            <div class="book-left">
                <label for="title">Title</label>
                <input type="text" name="title" id="title">

                <label for="publisher">Publisher</label>
                <input type="text">

                <label for="isbn-10">ISBN-10</label>
                <input type="text">
                <label for="pages">Pages</label>
                <input type="number">
                <label for="entry">Date</label>
                <input type="date">
                <br>
                <button type="submit">Submit</button>
            </div>
            <div class="book-right">
                <label for="author">Author</label>
                <input type="text">
                <label for="supplier">Supplier</label>
                <select name="supplier" id="supplier">
                    <option value="seller">Seller</option>
                    <option value="donor">Donor</option>
                </select>
                <label for="isbn-13">ISBN-13</label>
                <input type="text">
                <label for="price">Price</label>
                <input type="number">
                <label for="rack">Rack No.</label>
                <input type="number">
            </div>
        </form>
     </main>
    <footer><?php require('footer.php') ?></footer>
</body>

</html>