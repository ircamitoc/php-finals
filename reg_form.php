<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
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
                    <span class="details">First Name</div>
                    <input type="text" placeholder="Enter First Name" required>
                </div>
                <!-- LAST NAME -->
                <div class="input-box">
                    <span class="details">Last Name</div>
                    <input type="text" placeholder="Enter Last Name" required>
                </div>
                <!-- EMAIL ADDRESS -->
                <div class="input-box">
                    <span class="details">Email</div>
                    <input type="email" placeholder="Email Address" required>
                </div>
                <!-- DATE -->
                <div class="input-box">
                    <span class="details">Date</div>
                    <input type="date" required>
                </div>
                <!-- TIME -->
                <div class="input-box">
                    <span class="details">Time</div>
                    <input type="time" required>
                </div>
            </div>
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
            <div class="button">
                <input type="submit" value="Book Now">
            </div>
        </form>
    </div>
</body>
<?php include('footer.php'); ?>
</html>