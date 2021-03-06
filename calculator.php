<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <!-- LINK bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="calculator.css">
    <!-- Font Awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="photo/ico.ico" type="image/x-icon">
    <title>Calculator</title>
</head>

<body>
    <nav>
        <div class="container-web">
            <div class="nav-bar-top">
                <ul class="menu-top">
                    <li>
                        <a href="signin.php">Login/Sign in</a>
                        <a href="">English</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End nav-top -->

    <nav1>
        <span class="nav-toggle" id="js-nav-toggle">
            <i class="fas fa-bars"></i>
        </span>

        <div class="logo">
            <a href="index.php"><img src="photo/logo.png" width="200px" height="70px"></a>
        </div>
        <ul1 id="js-menu">
            <li><a href="aboutme.html">About me</a></li>
            <li><a href="tracking.php">Tracking</a></li>
            <li><a href="#" style="color: black;">Price</a></li>
            <li><a href="FAQ.html">FAQ</a></li>
            <li><a href="contact.html" ">Contact</a></li>
        </ul1>
    </nav1>
    <!-- End nav-down -->

    <div class=" header">
                    <div class="container-web">
                        <div class="pic-header">
                            <img src="photo/Header.jpg" alt="" width="100%" height="100%">
                        </div>
                    </div>
                    </div>
                    <!-- End header -->

                    <div class="content">
                        <div class="container-web">
                            <div class="calculator">
                                <a href="index.php">Home</a> <span>>Check Flash Express Price, Estimate Your Shipping
                                    Cost</span>
                                <hr>

                                <div class="box-pack">
                                    <select name="cal" id="cal">
                                        <option value="pack" disabled selected>Package</option>
                                        <option value="0">Envelop / Mini</option>
                                        <option value="30">Seal Bag / S</option>
                                        <option value="50">S+</option>
                                        <option value="55">M</option>
                                        <option value="95">M+</option>
                                        <option value="140">L</option>
                                        <option value="225">XL</option>
                                    </select>

                                    <select name="location" id="location">
                                        <option value="loca" disabled selected>location</option>
                                        <option value="35">BANGKOK</option>
                                        <option value="45">UPCOUNTRY</option>
                                    </select>

                                </div>
                                <!-- End box-pack -->
                                <br>
                                <br>
                                <br>
                                <div class="cost-box">
                                    <div class="container-web">
                                        <label for="">Price is:</label>
                                        <label class="result"></label>
                                        <label for="">Baht</label>
                                    </div>
                                </div>
                                <!-- End cost-box -->
                            </div>
                        </div>
                    </div>

                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
                        crossorigin="anonymous">
                    </script>
                    <script src="js/bootstrap.min.js"></script>
                    <script src="navbar.js"></script>

                    <br><br><br>
                    <footer class="container-fluid py-5 bg-dark">
                        <div class="row">
                            <div class="col-12 col-md">
                                <!--logo-->
                                <img src="photo/logo.png" width="100%">
                                <small class="d-block mb-3 text-muted "><i class="far fa-copyright"></i>
                                    copyright</small>
                            </div>
                            <div class="col-6 col-md" style="color:#fff;">
                                <h5>Features</h5>
                                <ul class="list-unstyled text-small">
                                    <li><a class="link-secondary" href="#">Cool stuff</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md " style="color:#fff;">
                                <h5>Resources</h5>
                                <ul class="list-unstyled text-small">
                                    <li><a class="link-secondary" href="#">Resource name</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md" style="color:#fff;">
                                <h5>Resources</h5>
                                <ul class="list-unstyled text-small">
                                    <li><a class="link-secondary" href="#">Business</a></li>
                                </ul>
                            </div>
                            <div class="col-6 col-md" style="color:#fff;">
                                <h5>About</h5>
                                <ul class="list-unstyled text-small">
                                    <li><a class="link-secondary" href="#aboutme.html">Team</a></li>
                                </ul>
                            </div>
                        </div>
                    </footer>
                    <a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i
                            class="fas fa-chevron-up"></i></a>
                    <script>
                    $(document).ready(function() {
                        $(window).scroll(function() {
                            if ($(this).scrollTop() > 50) {
                                $('#back-to-top').fadeIn();
                            } else {
                                $('#back-to-top').fadeOut();
                            }
                        });
                        // scroll body to 0px on click
                        $('#back-to-top').click(function() {
                            $('body,html').animate({
                                scrollTop: 0
                            }, 400);
                            return false;
                        });
                    });
                    </script>
                    <script>
                    $(document).ready(function() {
                        
                        $('select').on('change', function() {

                            $('.result').text(p);
                            var p = ($('select[name=cal]').val() + $('select[name=location]').val());

                        });

                    });
                    </script>

</body>

</html>