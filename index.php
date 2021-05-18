<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shikos-Andros website</title>

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navigation">
            <div class="navigation-container">
                <div class="nav-logo">
                    <img class="logo-pic" src="img/logo_white.png"></img>
                    <p class="logo-text">Kompanija</p>
                </div>
                <div class="nav-elem">
                    <ul>
                        <li><a href="kategorije.php">kategorije</a></li>
                        <li><a href="#">svi proizvodi</a></li>
                    </ul>
                </div>
                
                <div class="separator"></div>
                <!-- separator is only to keep navigation in order -->
    
                <div class="nav-search">
                    <img src="img/search_white.png" alt="search image">
                    <input type="text" placeholder="Pretraži">
                </div>
                <div class="nav-user">
                    <img src="img/user_white.png" alt="user account">
                </div>
            </div>
        </nav>
        <div class="content">
            <div class="content-left">
                <img src="img/main-body-pic.svg" class="image"></img>
                <button class="left-button">Kupovina</button>
            </div>
            <div class="content-right">
                <p class="right-text">Vaše rešenje <br> za dobro poslovanje</p>
            </div>
        </div>
        <footer>
            <div class="footer-container">
                <div class="footer-logo">
                    <img class="logo-pic" src="img/logo_black.png"></img>
                    <p class="logo-text">Kompanija</p>
                </div>
                <div class="footer-navigation">
                    <ul>
                        <li><a href="#">kategorije</a></li>
                        <li><a href="#">svi proizvodi</a></li>
                    </ul>   
                </div>
                <div class="footer-autor">
                    <p>Design and Develop by ###</p>
                </div>
            </div>
        </footer>
    </div>
    <script src="https://use.fontawesome.com/154b372a46.js"></script>
    <script src="script/app.js"></script>
</body>
</html>