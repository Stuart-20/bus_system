<?php

include 'connect.php';

$id = $_GET['id'];

$sql = "SELECT * FROM passenger
WHERE passenger_id='$id'";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>

<html>

<head>

<title>Edit Passenger</title>

<style>

body{
    background-color:#66FFFF;
    font-family:Arial;
}

form{
    background:white;
    padding:20px;
    width:400px;
}

</style>

</head>

<body>

<h2>Edit Passenger</h2>

<form method="post"
action="update_passenger.php">

<input type="hidden"
name="passenger_id"
value="<?php echo $row['passenger_id']; ?>" />

First Name:

<input type="text"
name="first_name"
value="<?php echo $row['first_name']; ?>" />

<br /><br />

Last Name:

<input type="text"
name="last_name"
value="<?php echo $row['last_name']; ?>" />

<br /><br />

Phone:

<input type="text"
name="phone_no"
value="<?php echo $row['phone_no']; ?>" />

<br /><br />

Gender:

<input type="text"
name="gender"
value="<?php echo $row['gender']; ?>" />

<br /><br />

Email:

<input type="text"
name="email"
value="<?php echo $row['email']; ?>" />

<br /><br />

Departure Point:

<input type="text"
name="departure_point"
value="<?php echo $row['departure_point']; ?>" />

<br /><br />

Destination:

<input type="text"
name="destination"
value="<?php echo $row['destination']; ?>" />

<br /><br />

<input type="submit"
value="Update Passenger" />

</form>

</body>

</html>