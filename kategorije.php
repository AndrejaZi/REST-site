<?php
    try{
        function myFunc(){
            echo "asdasdsadasdsad";
        }
        require "php/getCategories.php";

        $cats = getCategories();
    }
    catch(exception $exc){
        echo "";
    }
    

    
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shikos-Andros website</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="category-container">
        <nav class="navigation">
            <div class="navigation-container">
                <div class="nav-logo">  
                    <img class="logo-pic" src="img/logo_white.png"></img>
                    <p class="logo-text">Kompanija</p>
                </div>
                <div class="nav-elem">
                    <ul>
                        <li><a href="#">kategorije</a></li>
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
        <div class="main-category">
           <?php
           
           if(isset($cats)){
            foreach($cats as $cat){
                echo "<div class='category-element'>
                        <a>
                            <p id=".$cat["sifra"] ." style = 'display:none'> " .$cat["sifra"] . " </p>
                            <img id=".$cat["sifra"] ." class='category-img' src='img/sale-test.jpg'></img>
                            <p id=".$cat["sifra"] ." class='category-title'>" . $cat["klasa"] . "</p>
                        </a>
                        
                      </div>";
                }
            }else{
                echo "<div class='no-data'>
                            <img src='img/notify.svg' alt='no data found'></img>
                            <p class='no-data-text'>Podaci nisu pronađeni, molimo pokušajte ponovo</p>
                      </div>";
            }
            
           ?> 
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