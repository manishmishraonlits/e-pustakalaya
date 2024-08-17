<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="form.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <?php include 'header.php' ?>
    </header>
    <form action="">
        <div class="card-container">
            <div class="form">
                <table>

                </table>
                <b><label class="entry" for="entry">Member Entry Form</label></b>
                <br>
                <label for="name">Name</label>
                <input type="text">
                <label for="email">Email</label>
                <input type="email">
                <label for="contact">Contact No.</label>
                <input type="text" minlength="10" maxlength="10">
                <b>Address</b><br>
                <label for="street">Street</label>
                <input type="text">
                <label for="city">City</label>
                <input type="text">
                <label for="state">State</label>
                <input type="text">
                <label for="pin">PIN Code</label>
                <input type="text">
                <button>Submit</button>
            </div>
        </div>
    </form>
</body>

</html>