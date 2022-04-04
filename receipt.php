<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/017ae98281.js" crossorigin="anonymous"></script>
    <link href="receipt.css" rel="stylesheet">
    <title>RESERVATION</title>
</head>

<body>
    <!-- connection -->
    <?php

    //VARIABLES
    date_default_timezone_set('Asia/Singapore');
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $reserveDate = $_POST['reserveDate'];
    $reserveTime = $_POST['reserveTime'];
    $paxQuan = $_POST['paxQuan'];
    $polarBear = $_POST['polarBear'];
    if ($polarBear == 'n') {
        $bearHours = 0;
    } else {
        $bearHours = $_POST['bearHours'];
    }
    $assCoach = $_POST['assCoach'];
    if ($polarBear == 'n') {
        $coachHours = 0;
    } else {
        $coachHours = $_POST['coachHours'];
    }
    $locker = $_POST['locker'];
    $dateBooked = date('d-m-y h:i:s');
    $datehandler = date('y-m-d');
    $code = rand(1000, 9999);
    $reference = 'ICESKTNG' . $datehandler . '-' . $code;

    //FETCHING
    $name = $firstName . ' ' . $lastName;
    $pricePax = 450.00 * $paxQuan;
    $priceBear = 100.00 * $bearHours;

    if ($locker == 'y') {
        $lockerQuan = 1;
    } else {
        $lockerQuan = 0;
    }
    $lockerPrice = 150.00 * $lockerQuan;
    $coachPrice = 299.00 * $coachHours;
    $totalprice = $pricePax + $priceBear + $lockerPrice + $coachPrice;





    //connection

    $conn = mysqli_connect("localhost", "root", "", "myiceskate");
    if ($conn->connect_error) {
        die('Connection Failed : ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("insert into reservationinfo(reference,firstName,lastName,phoneNumber,reserveDate,
        reserveTime,paxQuan,polarBear,bearHours,assCoach,coachHours,email,locker,dateBooked)
         values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
        $stmt->bind_param(
            "ssssssisisisss",
            $reference,
            $firstName,
            $lastName,
            $phoneNumber,
            $reserveDate,
            $reserveTime,
            $paxQuan,
            $polarBear,
            $bearHours,
            $assCoach,
            $coachHours,
            $email,
            $locker,
            $dateBooked
        );
        $stmt->execute();
        echo "registration Succesfully";
        $stmt->close();



        $sql = "SELECT reference, firstName, lastName, reserveDate, reserveTime,paxQuan,polarBear,bearHours,assCoach,coachHours,locker, dateBooked from reservationinfo;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo $row['reference'];
            }
        }
        $conn->close();
    }

    //end PHP
    ?>

    <!-- connection -->

    <!-- HEADER START -->
    <header>
        <nav class="navbar navbar-expand-xxl navbar-dark bg-black fixed-top">
            <div class="container-fluid">
                <a href="#" class="navbar-brand mb-0 h1"><i class="fa-solid fa-person-skating">&nbsp;&nbsp;I C
                        E&nbsp;&nbsp;S K A T I N G</i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarExample01" aria-controls="navbarExample01" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarExample01">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item active">
                            <a class="nav-link" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pricing.html">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="reg_form.html">Reservation</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- HEADER END -->

    <div class="wrapper py-5 d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="col-md 5"></div>
                    <div class="card centered shadow-lg mt-2 mb-2 bg-white rounded" style="width:700px;">
                        <div class="card-header">
                            <h3>Ice Skating <small class="text-muted">Receipt</small></h3>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-12">
                                    <center>
                                        <i class="fa fa-check-circle"></i>
                                    </center>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12 lh-1">
                                    <center>
                                        <h4>Thank you for your reservation!</h4>
                                        <p class="text-muted">
                                            <?php
                                            echo $dateBooked;
                                            ?></p>
                                        </p>
                                        <p class="text-muted">Reservation Ref#: </p>
                                        <p class="lead fw-bold" style="color: rgb(46, 7, 110);"><?php
                                                                                                echo $reference;
                                                                                                ?></p>
                                    </center>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-12">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr class="bg-info">
                                                <td>Name</td>
                                                <td></td>
                                                <td></td>
                                                <td class="fw-bold"><?php
                                                                    echo $name;
                                                                    ?></p>
                                                    </p>
                                                </td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Total pax</td>
                                                <td class="text-muted">450.00×</td>
                                                <td class="text-muted"><?php
                                                                        echo $paxQuan;
                                                                        ?></p>
                                                    </p>
                                                </td>
                                                <td><?php
                                                    echo '₱' . $pricePax;
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td>Skate Aid</td>
                                                <td class="text-muted">100.00×</td>
                                                <td class="text-muted"><?php
                                                                        echo $bearHours;
                                                                        ?></td>
                                                <td><?php
                                                    echo '₱' . $priceBear;
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td>Assitant Coach</td>
                                                <td class="text-muted">299.00×</td>
                                                <td class="text-muted"><?php
                                                                        echo $coachHours;
                                                                        ?></td>
                                                <td><?php
                                                    echo '₱' . $coachPrice;
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td>Locker</td>
                                                <td class="text-muted">150.00×</td>
                                                <td class="text-muted"><?php
                                                                        echo $lockerQuan;
                                                                        ?></td>
                                                <td><?php
                                                    echo '₱' . $lockerPrice;
                                                    ?></td>
                                            </tr>
                                            <tr>
                                                <td>TOTAL</td>
                                                <td></td>
                                                <td></td>
                                                <td class="fw-bold"><?php
                                                                    echo '₱' . $totalprice;
                                                                    ?></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                                <div class="row form-group">
                                    <div class="col-6">
                                        <strong>RESERVATION DATE</strong>
                                        <p><?php
                                            echo $reserveDate;
                                            ?></p>
                                    </div>
                                    <div class="col-6">
                                        <strong>RESERVATION TIME</strong>
                                        <p><?php
                                            echo $reserveTime;
                                            ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="footer-copyright">&copy;2022 Copyright: <a href="index.html">ICE SKATING</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>