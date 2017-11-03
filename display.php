<html>
<head>
	<link rel="stylesheet" href="style.css">



<style>
table {
    border: 1px solid black;
background-color: #f1f1a1;    
    
}
th {
    
     background-color:#a1f1d1;
}
td{
   background-color: #f1a1e1;

}
</style></head>
<body>
	<center>
<h1>Details of FIXED DEPOSIT.</h1>


<?php

include 'connect.php';
$sql="select * from fd";
$data=mysqli_query($conn,$sql) or die("Error while executing query");
echo "<table>";

echo "<tr> <th>SNo</th>  <th>ID</th>  <th>Name</th>  <th>Account No.</th>  <th>From</th> <th>To</th> <th>Submitted value</th><th>Monitory Value</th> </tr>";
while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
{
echo "<tr><td>".$row['sno']."</td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['accno']."</td><td>".$row['start']."</td><td>".$row['end']."</td><td>".$row['dv']."</td><td>".$row['mv']."</td></tr>";
}
echo "</table>";

?>

<b>This is List of Fixed Accounts of your Family. </b>
<br>
<br>
<br>
<br>
<br>

<a href="index.html"><button type="button">Home</button></a>
<a href="tot_raj.php"><button type="button">Total money of Rajesh</button></a>
<a href="tot_arc.php"><button type="button">Total money of Archana</button></a>
<a href="tot_roh.php"><button type="button">Total money of Rohit</button></a>
<a href="tot_rah.php"><button type="button">Total money of Rahul</button></a>
</center>

</body>
</html>