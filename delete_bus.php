<?php

include 'connect.php';

$id = $_GET['id'];

$sql = "DELETE FROM bus WHERE bus_id='$id'";

if(mysqli_query($conn, $sql)){

    echo "Bus Deleted Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>