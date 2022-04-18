<?php
SESSION_START();

// Check if currently logged in
if (isset($_SESSION['username']) === false) {
    header('Location: index.php?unauthorized');
}

// Logging out
elseif (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php?logout');
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
    <title>Profile</title>
</head>
<body>

    <div class="main-cont">

        <div class="profile w3-card w3-animate-bottom">
            <a href="?logout" id="logout" class="w3-button w3-gray w3-round-xxlarge"><i class="fa fa-sign-out"></i> Logout</a>
            <div class="top-img"></div>
            <div class="me">
                <img src="img/me.jpg">
            </div>
            <div class="name">
                <h2><?php echo $_SESSION['name']; ?></h2>
                <div></div>
            </div>
            <div class="address">
                <p><i class="fa fa-map-marker"></i> <?php echo $_SESSION['address']; ?></p>
                
                <p><b>Experties:</b> <br> He's knows how to do web development,
                    and uses different web frameworks like Python Django, Java Spring Boot, and some JS
                    frameworks like Vue and Nuxt. He knows some cloud infrustructure like Heroku and Amazon Web Services.
                He's currently working as a part-time backend developer at <a href="https://purplme.com">Purpl</a>.</p>
            </div>
            <div class="images">
                <div><img src="img/1.jpg"></div>
                <div><img src="img/2.jpg"></div>
                <div><img src="img/3.jpg"></div>
                <div><img src="img/4.jpg"></div>
                <div><img src="img/5.jpg"></div>
                <div><img src="img/6.jpg"></div>
                <div><img src="img/7.jpg"></div>
                <div><img src="img/8.jpg"></div>
                <div><img src="img/9.jpg"></div>
            </div>
        </div>

    </div>
    
</body>
</html>