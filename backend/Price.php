<?php session_start(); ?>
<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="../photo/ico.ico" type="image/x-icon">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="backend.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous">
</head>

<body style="background-color:#E5E5E5;">
    <section>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img src="../photo/logo.png" width="150px"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <?php 
                        if($_SESSION['role'] == "customer")
                        {
                            echo " <li class='nav-item'>
                            <a class='nav-link '' href='Create.php'>Create Shipment</a>
                        </li>";
                        echo " <li class='nav-item'>
                        <a class='nav-link '' href='cu-dashbord.php'>DashBoard</a>
                    </li>";
                        }
                       ?>
                        <li class="nav-item">
                            <a class="nav-link active" href="">Price Estimation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Track.php">Track & Trace</a>
                        </li>
                        <?php 
                        
                        if($_SESSION['role'] == "hub")
                        {
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='hub.php'>Hub</a>
                        </li>" ;
                        } else if($_SESSION['role'] == "delivery")
                        {
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='delivery.php'>Delivery</a>
                        </li>" ;
                        } else if($_SESSION['role'] == "employee")
                        {
                            echo "<li class='nav-item'>
                            <a class='nav-link' href='employee.php'>Employee</a>
                        </li>" ;
                        echo " <li class='nav-item'>
                        <a class='nav-link '' href='em-dashbord.php'>DashBoard</a>
                    </li>";
                        }
                        ?>
                     
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <?php
                            //if(isset($_SESSION["name"])){
                        ?>
                        <li class="nav-item" style="float:right; right:125px;">
                            <div class="dropdown dropstart">
                                <button class="btn dropdown-toggle" type="button" id="navbarDropdown"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    Welcome, <?php echo $_SESSION["name"];?> ||
                                    Role : <?php echo $_SESSION['role']; ?>
                                </button>


                                <ul class="dropdown-menu dropdown-menu-dark " aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="info.php">Information</a></li>
                                    <li><a class="dropdown-item" href="Profile.php">Edit your Profile</a></li>
                                    <li><a class="dropdown-item" href="Password.php">Change Password</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                                </ul>
                            </div>
                            <?php
                         //}
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <br><br>
    <section>
        <div class="container shadow p-3 mb-5 bg-body rounded">
            <div class="container-fluid">
                <form action="post" class="row" id="PriceForm">
                    <div class="row g-4">
                        <div class="header">
                            <h3><i class="fas fa-calculator" style="color:#F03F45;"></i> Price Estimation</h3>
                        </div>
                        <div class="form-group  col-md-5">
                            <select class="form-select" id="Origin">
                                <option disabled selected>Origin</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group  col-md-5">
                            <select class="form-select" id="Destination">
                                <option disabled selected>Destination</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="form-group col-md-2">
                            <input class="btn btn-success" type="submit" name="submitSelect" id="submitSelect"
                                value="Select" style="width:60%">
                        </div>
                    </div>
                </form>
            </div>
            <br>
            <hr>
            <div class="col-md-12">
                <table class="table table-striped table-hover" id="myTable">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">Package Size</th>
                            <th class="text-center">Shipping Fee</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // $sql = "select * from book";
                            // if($result = $conn->query($sql)){
                            //     if($result -> num_rows > 0){
                            //         while($row=$result->fetch_array()){
                            //             echo "<tr>";
                            //             echo "<td>".$row["Package"]."</td>";
                            //             echo "<td>".$row["Fee"]."</td>";
                            //             echo "<td>";
                            //             echo"</td>";
                            //             echo"</tr>";
                            //         }
                                            ?>
                    </tbody>
                </table>
                <?php
                            //         $result->free();
                            //     } else {
                            //         echo "<p class='lead' style='color:#fbeeac'><em>No records were found.</em></p>";
                            //     }
                            // } else {
                            //     echo "Error: could not able to execute $sql." .$conn->error;
                            // }
                    ?>
            </div>
        </div>
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="../js/bootstrap.bundle.js"></script>
</body>

</html>