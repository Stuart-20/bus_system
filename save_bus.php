<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

$bus_number = $_POST['bus_number'];
$bus_name = $_POST['bus_name'];
$capacity = $_POST['capacity'];
$departure_tinme = $_POST['departure_tinme'];
$seat_number = $_POST['seat_number'];

$sql = "INSERT INTO bus
(
bus_number,
bus_name,
capacity,
departure_tinme,
seat_number
)

VALUES
(
'$bus_number',
'$bus_name',
'$capacity',
'$departure_tinme',
'$seat_number'
)";

if(mysqli_query($conn, $sql)){

    echo "Bus Saved Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>