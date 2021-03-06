<?php session_start();
include("include/config.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="signin.css" rel="stylesheet">
        <link rel="shortcut icon" href="photo/ico.ico" type="image/x-icon">
         <!-- LINK bootstrap -->
         <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    </head>
    <body>
        <nav>
            <div class="container-web">
                <div class="nav-bar-top">
                    <ul class="menu-top">
                        <li>
                            <a href="#">Login/Sign in</a>
                            <a href="">English</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- nav -->
    
        <nav1>
            <span class="nav-toggle" id="js-nav-toggle">
                <i class="fas fa-bars"></i>
            </span>
  
            <div class="logo">
                <a href="index.php"><img src="photo/logo.png" width="200px" height="70px"></a>
            </div>
            <ul1 id="js-menu">
                <li><a href="aboutme.html">About me</a></li>
                <li><a href="tracking.php" ">Tracking</a></li>
                <li><a href="calculator.php">Price</a></li>
                <li><a href="FAQ.html" >FAQ</a></li>
                <li><a href="contact.html" >Contact</a></li>
            </ul1>
        </nav1>
            
    <div class="background-sign-in ">
        <div class="container-sign-in">
                <div class="content-sign-in text-center">
                    
                    <h2>How many parcels can be handled</h2>
                    <p>A parcel management system that will make your package delivery easy, convenient, fast, and accessible anywhere. Sign up for free today. No cost</p>
                </div>
        </div>   

            <div class=" card" style="border-radius: 20px;  ">
                <div class="card-content text-success">
                    <div class="button-card">
                        <div id="btn"></div>
                        <button type="button" class="toggle-btn" onclick="login()">Log in</button>
                        <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
                    </div>
                    <div class="card-icon">
                        <i class="fab fa-facebook"></i>
                        <i class="fab fa-google"></i>
                        <i class="fab fa-apple"></i>
                    </div>
                    <form id="login" class="input-card" action="login.php" method='post'>
                        <input type="text" class="text-card" name="txtuse" id="txtuse"placeholder="Username">
                        <input type="password" class="text-card" name="txtps" id="txtps" placeholder="Password">
                        <button type="submit" class="submit-btn" id="btnlog">Log in</button>
                    </form>
                    <form id="signup" class="input-card">
                        <input type="text" class="text-card" name="txtuse" id="txtuse" placeholder="Username">
                        <input type="email" class="text-card" name="txtmail" id="txtmail" placeholder="Email">
                        <input type="password" class="text-card" name="txtps" id="txtps" placeholder="Password"><br>
                        <input type="checkbox" class="chech-box"><span>Agree </span>
                        <input type="hidden" value="customer" name="txtrole">
                        <button type="submit" class="submit-btn" id="btnsign">Sign up</button>
                    </form>
                </div>
        </div> 
    </div>
            
        
        <!-- BOOTSTARP JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="js/bootstrap.min.js"></script>
    <script src="navbar.js"></script>
        <script>
            var x = document.getElementById("login");
            var y = document.getElementById("signup");
            var z = document.getElementById("btn");

            function signup(){
                x.style.left ="-400px";
                y.style.left ="50px";
                z.style.left ="125px";
            }
            function login(){
                x.style.left ="50px";
                y.style.left ="450px";
                z.style.left ="0";
            }
        </script>

        <script>
        $(function() {
            $("#signup").submit(function() {
                console.log("Hello");
                event.preventDefault();
                $.ajax({
                    url: "signup.php",
                    type: "post",
                    data: $("form#signup").serialize(),
                    success: function(data) {
                        console.log(data);
                        location.reload();
                    },
                    error: function(data) {
                        console.log("An error accured." + data);
                    }
                });
            });

            // $("#login").submit(function() {
            //     event.preventDefault();
            //     $.ajax({
            //         url: "login.php",
            //         type: "post",
            //         data: $("form#login").serialize(),
            //         success: function(data) {
            //             console.log(data);
            //             //window.location.href = '/newgit/backend/Create.php';
            //         },
            //         error: function(data) {
            //             console.log("An error accured." + data);
            //             //location.reload();
            //         }
            //     });
            // });

            


    });
    </script>
    </body>
</html>