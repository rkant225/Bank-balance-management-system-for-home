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

<h1>Total balance in Account of Rohit Singh.</h1>


<?php

include 'connect.php';
$sql="select * from fd where id='11217'";
$data=mysqli_query($conn,$sql) or die("Error while executing query");
echo "<table>";
$tots=0;
$totm=0;
echo "<tr> <th>SNo</th>  <th>ID</th>  <th>Name</th>  <th>Account No.</th>  <th>From</th> <th>To</th> <th>Submitted value</th><th>Monitory Value</th> </tr>";
while($row=mysqli_fetch_array($data,MYSQLI_ASSOC))
{
$tots=$tots+$row['dv'];
$totm=$totm+$row['mv'];
echo "<tr><td>".$row['sno']."</td><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['accno']."</td><td>".$row['start']."</td><td>".$row['end']."</td><td>".$row['dv']."</td><td>".$row['mv']."</td></tr>";
}
echo "</table>";

echo "<p>Total Deposited money is : <b>$tots</b></p>";
echo "<p>Total Matured money will be : <b>$totm</b></p>";

?>

<b>Total saving of Rohit Singh.</b>
<a href="index.html"><button type="button">Home</button></a>
</center>

</body>
</html>