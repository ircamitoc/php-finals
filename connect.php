<?php
    date_default_timezone_set('Asia/Singapore');
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $phoneNumber = $_POST['phoneNumber'];
    $reserveDate = $_POST['reserveDate'];
    $reserveTime = $_POST['reserveTime'];
    $paxQuan = $_POST['paxQuan'];
    $polarBear = $_POST['polarBear'];
    $bearHours = $_POST['bearHours'];
    $assCoach = $_POST['assCoach'];
    $coachHours = $_POST['coachHours'];
    $locker = $_POST['locker'];
    $dateBooked = date('d-m-y h:i:s');
    $datehandler = date('y-m-d');
    $code = rand(1000,9999);
    $reference ='ICESKTNG'.$datehandler.'-'.$code;


    
    //connection

    $conn = mysqli_connect("localhost","root", "","myiceskate");
    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
    }
    else{
        $stmt = $conn->prepare("insert into reservationinfo(reference,firstName,lastName,phoneNumber,reserveDate,
        reserveTime,paxQuan,polarBear,bearHours,assCoach,coachHours,email,locker,dateBooked)
         values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
         $stmt->bind_param("ssssssisisisss",$reference,$firstName,$lastName,$phoneNumber,$reserveDate,$reserveTime
        ,$paxQuan,$polarBear,$bearHours,$assCoach,$coachHours,$email,$locker,$dateBooked);
        $stmt->execute();
        echo "Registration is successful!";
        $stmt->close();
        $conn->close();
    }


?>
