<?php
$message = null;
if (isset($_GET['status'])) {
    if ($_GET['status'] == 1)
        $message = "Invalid email or password!";
    else if ($_GET['status'] == 2)
        $message = "Logout successful!";
    else if ($_GET['status'] == 3)
        $message = "Invalid session. Login again!";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="login-body">
    <div id="log-in-container">
        <div id="logo">
            <img src="image/image.jpg" alt="ePustakalaya" class="login_logo">
        </div>
        <div id="login">
            <form action="index.php">
                <h1>L O G - I N</h1>
                <hr>
                <br>
                <label for="email">Email</label>
                <input type="email" class="email">
                <label for="password">Password</label>
                <input type="password" class="password">
                <br><br>
                <button>Log-in</button>
            
            </form>
        </div>
        <div class="fix"></div>
    </div>
</body>

</html>