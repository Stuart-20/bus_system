<?php

include 'connect.php';

$sql = "SELECT * FROM booking";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Bookings</title>

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

<h2>Booking Records</h2>

<table border="1">

<tr>

<th>Booking ID</th>
<th>Date</th>
<th>Bus Number</th>
<th>Amount</th>
<th>Passenger ID</th>
<th>Bus ID</th>
<td>Action</td>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['booking_id']; ?></td>

<td><?php echo $row['date_on_booking']; ?></td>

<td><?php echo $row['bus_number']; ?></td>

<td><?php echo $row['Amount']; ?></td>

<td><?php echo $row['passenger_id']; ?></td>

<td><?php echo $row['bus_id']; ?></td>

<td>
<a href="delete_bus.php?id=<?php echo $row['bus_id']; ?>"> 
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