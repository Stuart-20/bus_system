<?php

include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM payment WHERE payment_id='$id'";

if(mysqli_query($conn, $sql)){

    echo "Payment Deleted Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>