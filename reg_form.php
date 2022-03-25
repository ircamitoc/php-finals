<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Reservation</title>
</head>
<?php include('header.php'); ?>

<body>
    <div class="container">
        <div class="title">Registration</div>
        <form action="#">
            <div class="user-details">
                <!-- FIRST NAME -->
                <div class="input-box">
                    <span class="details">First Name</span>
                    <input type="text" placeholder="Enter First Name" required>
                </div>
                <!-- LAST NAME -->
                <div class="input-box">
                    <span class="details">Last Name</span>
                    <input type="text" placeholder="Enter Last Name" required>
                </div>
                <!-- EMAIL ADDRESS -->
                <div class="input-box">
                    <span class="details">Email</span>
                    <input type="email" placeholder="Email Address" required>
                </div>
                <!-- PHONE NUMBER -->
                <div class="input-box">
                    <span class="details">Contact Number</span>
                    <input type="text" placeholder="Enter Contact Number" required>
                </div>
                <!-- DATE -->
                <div class="input-box">
                    <span class="details">Date</span>
                    <input type="date" required>
                </div>
                <!-- TIME -->
                <div class="input-box">
                    <span class="details">Time</span>
                    <input type="time" required>
                </div>
            </div> <!-- END OF USER-DETAILS -->
            <!-- POLAR BEAR -->
            <div class="pb-details">
                <span class="pb-rent-title">Polar Bear</span>
                <div class="category">
                    <label for="">
                        <span class="dot-one"></span>
                        <span class="polar-bear">Yes</span>
                    </label>
                    <label for="">
                        <span class="dot-one"></span>
                        <span class="polar-bear">No</span>
                    </label>
                </div>
            </div>
            <div class="coach-details">
                <span class="coach-rent-title">Assistant Coach</span>
                <div class="category">
                    <label for="">
                        <span class="dot-one"></span>
                        <span class="asst-coach">Yes</span>
                    </label>
                    <label for="">
                        <span class="dot-one"></span>
                        <span class="asst-coach">No</span>
                    </label>
                </div>
            </div>
            <div class="button">
                <input type="submit" value="Book Now">
            </div>
        </form>
    </div> <!-- END OF CONTAINER -->
</body>

</html>