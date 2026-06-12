<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connect.php';

$amount = $_POST['amount'];
$payment_date = $_POST['payment_date'];
$receipt_number = $_POST['receipt_number'];
$payment_method = $_POST['payment_method'];
$passenger_id = $_POST['passenger_id'];

$sql = "INSERT INTO payment
(
amount,
payment_date,
receipt_number,
payment_method,
passenger_id
)

VALUES
(
'$amount',
'$payment_date',
'$receipt_number',
'$payment_method',
'$passenger_id'
)";

if(mysqli_query($conn, $sql)){

    echo "Payment Saved Successfully";

}else{

    echo "Error: " . mysqli_error($conn);

}

?>