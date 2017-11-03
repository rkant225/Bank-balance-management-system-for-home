<html>
<head>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<center>


<?php
include 'connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";




//Variables from page..!!!
$fnm=$_POST['first_name'];
$lnm=$_POST['last_name'];
$eml=$_POST['email'];

echo "<br>";
//echo $fnm;
echo "<br>";
//echo $lnm;
echo "<br>";
//echo $eml;
echo "<br>";
echo "<br>";

if(empty($fnm))
{
echo"First mame is empty";
die();
}

if(empty($lnm))
{ 
echo"Last mame is empty";
die();
}

if(empty($eml))
{ 
echo"Email mame is empty";
die();
}

$sql="insert into employees(first_name,last_name,email) values('$fnm','$lnm','$eml')";

if($conn->query($sql)===TRUE)
{
echo "New employee was added success fully";
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