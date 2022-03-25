<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/017ae98281.js" crossorigin="anonymous"></script>
    <link href="test_style.css" rel="stylesheet">
    <title>Reservation</title>
</head>

<body>
    <?php include('header.php'); ?>
    <div class="hero vh-100 d-flex align-items-center" id="home">
        <div class="container">
            <div class="title">Online Reservation</div>
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" placeholder="Enter First Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Last Name</span>
                        <input type="text" placeholder="Enter Last Name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" placeholder="Email Address" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="text" placeholder="Enter Number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Date</span>
                        <input type="date" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Time</span>
                        <input type="time" required>
                    </div>
                </div>
                <div class="pb-details">
                    <input type="radio" name="polar" id="dot-1">
                    <input type="radio" name="polar" id="dot-2">
                    <span class="pb-title">Rent a polar bear?</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="polar-bear">Yes</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="polar-bear">No</span>
                        </label>
                    </div>
                </div>
                <div class="coach-details">
                    <input type="radio" name="coach" id="dot-3">
                    <input type="radio" name="coach" id="dot-4">
                    <span class="coach-title">Get an assistant coach?</span>
                    <div class="category">
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="asst-coach">Yes</span>
                        </label>
                        <label for="dot-4">
                            <span class="dot four"></span>
                            <span class="asst-coach">No</span>
                        </label>
                    </div>
                </div>
                <div class="locker-details">
                    <input type="radio" name="lock" id="dot-5">
                    <input type="radio" name="lock" id="dot-6">
                    <span class="locker-title">Rent a locker?</span>
                    <div class="category">
                        <label for="dot-5">
                            <span class="dot five"></span>
                            <span class="locker">Yes</span>
                        </label>
                        <label for="dot-6">
                            <span class="dot six"></span>
                            <span class="locker">No</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Book Now">
                </div>
            </form>
        </div>
    </div>
    <?php include('footer.php'); ?>
</body>

</html>