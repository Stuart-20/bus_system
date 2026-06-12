<?php

include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM passenger
WHERE passenger_id='$id'";

if(mysqli_query($conn, $sql)){

    echo "Passenger Deleted Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>