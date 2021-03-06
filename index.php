<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
        integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="shortcut icon" href="photo/ico.ico" type="image/x-icon">
    <title>Bolt Psu Express</title>
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
            <li><a href="calculator.php">Price</a></li>
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

                    <div class="box">

                        <div class="container-web">
                            <form action="tracking.php" method="post" id="tacking">
                                <div class="input-box">
                                    <i class="fa fa-search" aria-hidden="true"></i>
                                    <input type="text" class="input-text" name="get_tack"
                                        placeholder="Please enter your Express tracking number"
                                        data-toggle="document.location.href='tracking.php'">
                                    <button class="btn" type="submit" id="button-addon2"
                                        onClick="document.location.href='tracking.php'">Track</button>
                                </div>
                            </form>

                        </div>
                    </div>
                    <!-- End-box -->

                    <!-- <div class="box-2">
        <div class="container-web">
            <div class="input-box-2">
                <i class="fa fa-search" aria-hidden="true"></i>
                <input type="text" class="input-text" placeholder="Please enter your Express tracking number" >
                <button type="button" class="enter-track" id="btn-enter" >Track</button>
            </div>
            <div class="btton">
                <button type="button" class="enter-track2" id="btn-enter" >Track</button>
            </div>
        </div>
    </div> -->





                    <div class="content-box-1">
                        <div class="container-web">
                            <div class="announce">
                                <div class="content-1">
                                    Tired of transporting slow?
                                    <br>
                                    Let us deliver the Bolt PSU Express.
                                </div>
                                <div class="content-2">
                                    Can track the product 24 hours.
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End-content-box-1 -->

                    <div class="content-box-2">
                        <div class="container-web">
                            <div class="card-content">
                                <div class="card-content-item-1">
                                    <a href="aboutme.html"><i class="fa fa-id-card" aria-hidden="true"></i></a>
                                    <a href="FAQ.html"><i class="fa fa-comments" aria-hidden="true"></i></a>

                                </div>
                                <div class="card-content-item-2">
                                    <a href="calculator.php"><i class="fa fa-archive" aria-hidden="true"></i></a>
                                    <a href="contact.html"><i class="fa fa-user" aria-hidden="true"></i></a>
                                    <a href="tracking.php"><i class="fa fa-truck" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End content2 -->

                    <div class="content-box-3">
                        <div class="container-web">
                            <div class="cost-box">
                                <div class="grid-item-1">
                                    <span class="head-text">Estimate Shipping Cost</span>
                                    <br>
                                    <select name="postal" id="postal-1">
                                        <option value="Envelop" disabled selected>Sub-district/District/Province/Postal
                                            code</option>
                                        <option value="Seal">Sub-district/District/Province/Postal code</option>
                                        <option value="S">Sub-district/District/Province/Postal code</option>
                                        <option value="M">Sub-district/District/Province/Postal code</option>
                                        <option value="M+">Sub-district/District/Province/Postal code</option>
                                        <option value="L">Sub-district/District/Province/Postal code</option>
                                        <option value="XL">Sub-district/District/Province/Postal codeL</option>
                                    </select>
                                    <br>
                                    <select name="postal" id="postal-2">
                                        <option value="Envelop" disabled selected>Sub-district/District/Province/Postal
                                            code</option>
                                        <option value="Seal">Sub-district/District/Province/Postal code</option>
                                        <option value="S">Sub-district/District/Province/Postal code</option>
                                        <option value="M">Sub-district/District/Province/Postal code</option>
                                        <option value="M+">Sub-district/District/Province/Postal code</option>
                                        <option value="L">Sub-district/District/Province/Postal code</option>
                                        <option value="XL">Sub-district/District/Province/Postal codeL</option>
                                    </select>

                                    <div class="weight">
                                        <span class="Weight">Weight</span>
                                        <input type="text">
                                        <span class="kg">kg</span>
                                    </div>

                                    <div class="value">
                                        <span class="Value">Value</span>
                                        <input type="text" placeholder="Length">
                                        <input type="text" placeholder="Width">
                                        <input type="text" placeholder="Height">
                                    </div>
                                    <span class="endcy">Fill in the size then cost estimate can be more
                                        accurately.</span>
                                </div>

                                <div class="grid-item-2">
                                    <iframe
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.024193847477!2d100.49691231477337!3d7.006433894938812!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304d29af97c3cdef%3A0xf7efa93203415043!2z4Lih4Lir4Liy4Lin4Li04LiX4Lii4Liy4Lil4Lix4Lii4Liq4LiH4LiC4Lil4Liy4LiZ4LiE4Lij4Li04LiZ4LiX4Lij4LmM!5e0!3m2!1sth!2sth!4v1614015130389!5m2!1sth!2sth"
                                        width="100%" height="400" style="border:0;" allowfullscreen=""
                                        loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -box -3 -->

                    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
                        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU"
                        crossorigin="anonymous"></script>
                    <!-- BOOTSTARP JS -->
                    <script src="js/bootstrap.min.js"></script>
                    <script src="navbar.js"></script>
                    <br><br><br>
                    <footer class="container-fluid py-5 bg-dark">
                        <div class="row">
                            <div class="col-12 col-md">
                                <!--logo-->
                                <img src="photo/logo.png" width="100%">
                                <small class="d-block mb-3 text-muted"><i class="far fa-copyright"></i>
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

                        $(function() {
                            $("#tacking").submit(function() {
                                event.preventDefault();
                                $.ajax({
                                    url: "tracking.php",
                                    type: "post",
                                    data: $("form#tacking").serialize(),
                                    success: function(data) {

                                    },
                                    error: function(data) {
                                        console.log("An error occurred." + data);
                                    }
                                });
                            });

                        });
                    });
                    </script>

</body>

</html>