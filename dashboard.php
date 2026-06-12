<?php

session_start();

if(!isset($_SESSION['username'])){

    header("Location: login.html");

}

include 'connect.php';

$passengers =
mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM passenger")
);

$buses =
mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM bus")
);

$bookings =
mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM booking")
);

$payments =
mysqli_num_rows(
mysqli_query($conn,
"SELECT * FROM payment")
);

?>

<!DOCTYPE html>

<html>

<head>

<title>Dashboard</title>

<style>

body{

    background:#66FFFF;
    font-family:Arial;

}

.box{

    width:250px;
    background:white;
    padding:20px;
    margin:20px;
    display:inline-block;
    text-align:center;
    font-size:20px;

}

h1{

    color:blue;

}

a{

    text-decoration:none;

}

</style>

</head>

<body>

<h1>Bus Booking Dashboard</h1>

<p>

Welcome:

<?php echo $_SESSION['username']; ?>

</p>

<div class="box">

Total Passengers

<br /><br />

<?php echo $passengers; ?>

</div>

<div class="box">

Total Buses

<br /><br />

<?php echo $buses; ?>

</div>

<div class="box">

Total Bookings

<br /><br />

<?php echo $bookings; ?>

</div>

<div class="box">

Total Payments

<br /><br />

<?php echo $payments; ?>

</div>

<br /><br />

<a href="logout.php">

Logout

</a>

</body>

</html>