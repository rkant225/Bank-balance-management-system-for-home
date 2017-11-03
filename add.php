<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>


<body>
	<center>


<form method="get" action="index.html">
    <button type="submit">Go home</button>
</form>
<?php
include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




//Variables from page..!!!
$id=$_POST['id'];
$name=$_POST['naame'];
$accno=$_POST['accno'];
$start=$_POST['start'];
$end=$_POST['end'];
$dv=$_POST['dv'];
$mv=$_POST['mv'];


echo "<br>";
echo $name;
echo "<br>";
echo $start;
echo "<br>";
//echo $eml;
echo "<br>";
echo "<br>";

if(empty($id)||empty($name)||empty($accno)||empty($start)||empty($end)||empty($dv)||empty($mv))
{
echo"Some of the entry is empty <b>GO BACK</b> and try again...!!!";
die();
}


$sql="insert into fd(id,name,accno,start,end,dv,mv)values('$id','$name','$accno','$start','$end','$dv','$mv')";

if($conn->query($sql)===TRUE)
{
echo "New <b>ENTRY</b> was added success fully";
}
else
{
echo "Error " . $sql . "<br>" .$conn->error;
}

$conn->close();

?>

<form method="get" action="index.html">
    <button type="submit">Go back</button>
</form>

<form method="get" action="display.php">
    <button type="submit">Display employees</button>
</form>

</center>
</body>
</html>