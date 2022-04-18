<?php
SESSION_START();

// My things
$username = 'denniel-sadian';
$password = '1234';
$name = 'Denniel Luis S. Sadian';
$address = 'Cabugao, Gasan, Marinduque';

// Check if creds are complete
if (isset($_POST['username']) && isset($_POST['password'])) {
    
    // Username is not correct
    if ($_POST['username'] != $username) {
        header('Location: index.php?notusername');
    }
    
    // Password is not correct
    elseif ($_POST['username'] == $username && $_POST['password'] != $password) {
        header('Location: index.php?notpassword');
    }

    // Username and password match
    elseif ($_POST['username'] == $username && $_POST['password'] == $password) {
        $_SESSION['username'] = $username;
        $_SESSION['address'] = $address;
        $_SESSION['name'] = $name;
        header('Location: index.php?ok');
    }

}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/w3.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Nunito:wght@300&family=Square+Peg&display=swap" rel="stylesheet">
    <title>Login</title>
</head>
<body>

    <div class="main-cont and-center">
        <form method="POST" class="w3-card w3-animate-opacity">
            <h2><i class="fa fa-sign-in"></i> Login to MyTumblr</h2>
            <hr>

            <?php
            // Incorrect username
            if (isset($_GET['notusername'])) {
                echo '<div class="w3-panel w3-red">Username does not exist.</div>';
            }
            
            // Incorrect password
            elseif (isset($_GET['notpassword'])) {
                echo '<div class="w3-panel w3-orange">Incorrect password.</div>';
            }
            
            // Unauthorized to see the profile page
            elseif (isset($_GET['unauthorized'])) {
                echo '<div class="w3-panel w3-red">Unauthorized. Please login first.</div>';
            }
            
            // Redirect to profile page
            elseif (isset($_GET['ok'])) {
                echo '<div class="w3-panel w3-green"><i class="fa fa-spinner w3-spin"></i> Logging in...</div>';
                header('Refresh: 3; url=account.php');
            }
            
            // Check if still logged in
            elseif (isset($_SESSION['username'])) {
                echo '<div class="w3-panel w3-blue">You are still logged in. Please <a href="account.php">click here</a>.</div>';
            }
            
            // Logged out
            elseif (isset($_GET['logout'])) {
                echo '<div class="w3-panel w3-blue">Thank you.</div>';
            }
            ?>

            <div class="input-box">
                <label for="username">Username:</label>
                <input type="text" name="username" required>
            </div>

            <div class="input-box">
                <label for="username">Password:</label>
                <input type="password" name="password" required>
            </div>

            <div class="input-box">
                <button type="submit" class="w3-btn w3-green">Login</button>
            </div>
    
        </form>
    </div>
    
</body>
</html>