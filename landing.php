<?php
// start the session
session_start();
// check if the user is not logged in, then redirect user to login page
if(!isset($_SESSION['user_name']) && ($_SESSION['user_name']) !== true)
{
	header('location: login.php');
	exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/resources/style.css"/>
    <title>Alpha Landing Page</title>
</head>
<body>
    <section class="showcase">
        <header>
            <h2 class="logo">XXX</h2>
            <div class="toggle"></div>   
        </header>

        <div class="overlay"></div>
        
        <div class="text">
            <h2>Never Stop</h2>
            <h3>Exploring the world</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
                Similique ad tenetur cumque, corrupti natus debitis. 
                Alias sunt nobis rem? Eaque.
            </p>
            <a href="#">Explore</a>
        </div>

        <ul>
            <li>
                <img src="" alt="">
            </li>
        </ul>

        <video src="" muted loop autoplay></video>
        <div class="socials">
            <ul>
                <li>
                    <a href="https://www.instagram.com/"> <ion-icon name="logo-instagram"></ion-icon></a>
                        <a href="https://www.twitter.com/"> <ion-icon name="logo-twitter"></ion-icon></a>
                        <a href="https://www.discord.com/"> <ion-icon name="logo-discord"></ion-icon></a>
                        <a href="https://www.xbox.com/"> <ion-icon name="logo-xbox"></ion-icon></a>   
                </li>
            </ul>
        </div>
    </section>

    <div class="menu">
        <ul>
            <li><a href="#">Home</a></li> 
            <li><a href="#">Projects</a></li> 
            <li><a href="#">About</a></li> 
            <li><a href="#">News</a></li>
            <li><a href="#">Login/Sign Up</a></li>
        </ul>  
    </div>    

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    
    <script>
        const menuToggle = document.querySelector('.toggle')
        const showcase = document.querySelector('.showcase')

        menuToggle.addEventListener('click', ()=>{
          menuToggle.classList.toggle('active')
          showcase.classList.toggle('active')  
        })
    </script>
</body>
</html>