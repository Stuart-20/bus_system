<?php

include 'connect.php';

$sql = "SELECT * FROM passenger";

$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>

<html>

<head>

<title>View Passengers</title>

<style>

body{
    background-color:#66FFFF;
    font-family:Arial;
}

table{
    border-collapse:collapse;
    width:80%;
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

<h2>Passenger Records</h2>

<table border="1">

<tr>

<th>ID</th>
<th>First Name</th>
<th>Last Name</th>
<th>Phone</th>
<th>Gender</th>
<th>Email</th>
<th>Departure</th>
<th>Destination</th>
<th>Action</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

<td><?php echo $row['passenger_id']; ?></td>

<td><?php echo $row['first_name']; ?></td>

<td><?php echo $row['last_name']; ?></td>

<td><?php echo $row['phone_no']; ?></td>

<td><?php echo $row['gender']; ?></td>

<td><?php echo $row['email']; ?></td>

<td><?php echo $row['departure_point']; ?></td>

<td><?php echo $row['destination']; ?></td>

<td>

<a href="edit_passenger.php?id=<?php echo $row['passenger_id']; ?>">

Edit

</a>

|

<a href="delete_passenger.php?id=<?php echo $row['passenger_id']; ?>">

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