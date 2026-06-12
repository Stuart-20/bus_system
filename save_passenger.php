<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phone_no = $_POST['phone_no'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$departure_point = $_POST['departure_point'];
$destination = $_POST['destination'];

$sql = "INSERT INTO passenger
(
first_name,
last_name,
phone_no,
gender,
email,
departure_point,
destination
)

VALUES
(
'$first_name',
'$last_name',
'$phone_no',
'$gender',
'$email',
'$departure_point',
'$destination'
)";

if(mysqli_query($conn, $sql)){

    echo "Passenger Saved Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>