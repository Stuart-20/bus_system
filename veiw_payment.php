<?php

include 'connect.php';

$sql = "SELECT * FROM payment";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Payments</title>

<style>

body{
    background-color:#66FFFF;
    font-family:Arial;
}

table{
    border-collapse:collapse;
    width:95%;
    background:white;
}

th{
    background:blue;
    color:white;
    padding:10px;
}

td{
    padding:10px;
    text-align:center;
}

tr:nth-child(even){
    background:#f2f2f2;
}

h2{
    color:blue;
}

</style>

</head>

<body>

<h2>Payment Records</h2>

<table border="1">

<tr>

<th>Payment ID</th>
<th>Amount</th>
<th>Payment Date</th>
<th>Receipt Number</th>
<th>Payment Method</th>
<th>Passenger ID</th>
<td>Action</td>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['payment_id']; ?></td>

<td><?php echo $row['amount']; ?></td>

<td><?php echo $row['payment_date']; ?></td>

<td><?php echo $row['receipt_number']; ?></td>

<td><?php echo $row['payment_method']; ?></td>

<td><?php echo $row['passenger_id']; ?></td>

<td>
<a href="delete_payment.php?id=<?php echo $row['payment_id']; ?>">
Delete
</a>
</td>

</tr>

<?php

}

?>

</table>

</body>

</html>