<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <span><img src="images/logo.jpg" alt="Logo" class="header"></span>
        <nav class="inline">
            <a href="login/home.php">Admin</a>
            <a href="login/home.php">Staff</a>
            <a href="login/home.php">Member</a>
            <a href="add_book.php">Add Book</a>
        </nav>
        <hr>
    </header>
    <form action="get">
        <div class="class-container">
            <div class="form">
                <label for="title">Title</label>
                <input type="text">
                <label for="author">Author</label>
                <input type="text">
                <label for="edition">Edition</label>
                <input type="text">
                <label for="publisher">Publisher</label>
                <input type="text">
                <label for="isbn-10">ISBN-10</label>
                <input type="text">
                <label for="isbn-13">ISBN-13</label>
                <input type="text">
                <label for="pages">Pages</label>
                <input type="text">
                <label for="price">Price</label>
                <input type="text">
                <label for="category">Category</label>
                <input type="text">
                <button type="submit">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>