<?php

include 'connect.php';

$sql = "SELECT * FROM bus";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Buses</title>

<style>

body{
    background-color:#66FFFF;
    font-family:Arial;
}

table{
    border-collapse:collapse;
    width:90%;
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

<h2>Bus Records</h2>

<table border="1">

<tr>

<th>Bus ID</th>
<th>Bus Number</th>
<th>Bus Name</th>
<th>Capacity</th>
<th>Departure Time</th>
<th>Seat Number</th>
<th>Action</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['bus_id']; ?></td>

<td><?php echo $row['bus_number']; ?></td>

<td><?php echo $row['bus_name']; ?></td>

<td><?php echo $row['capacity']; ?></td>

<td><?php echo $row['departure_tinme']; ?></td>

<td><?php echo $row['seat_number']; ?></td>

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