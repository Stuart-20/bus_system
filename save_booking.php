<?php

include 'connect.php';

$booking_id = $_POST['booking_id'];
$date_on_booking = $_POST['date_on_booking'];
$bus_number = $_POST['bus_number'];
$Amount = $_POST['Amount'];
$passenger_id = $_POST['passenger_id'];
$bus_id = $_POST['bus_id'];

$sql = "INSERT INTO booking
(
booking_id,
date_on_booking,
bus_number,
Amount,
passenger_id,
bus_id
)

VALUES
(
'$booking_id',
'$date_on_booking',
'$bus_number',
'$Amount',
'$passenger_id',
'$bus_id'
)";

if(mysqli_query($conn, $sql)){

    echo "Booking Saved Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>