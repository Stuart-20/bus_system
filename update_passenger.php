<?php

include 'connect.php';

$id = $_POST['passenger_id'];

$first_name = $_POST['first_name'];

$last_name = $_POST['last_name'];

$phone_no = $_POST['phone_no'];

$gender = $_POST['gender'];

$email = $_POST['email'];

$departure_point = $_POST['departure_point'];

$destination = $_POST['destination'];

$sql = "UPDATE passenger SET

first_name='$first_name',

last_name='$last_name',

phone_no='$phone_no',

gender='$gender',

email='$email',

departure_point='$departure_point',

destination='$destination'

WHERE passenger_id='$id'";

if(mysqli_query($conn, $sql)){

    echo "Passenger Updated Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>