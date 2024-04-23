<?php
$servername ="localhost";
$username ="root";
$password ="";
$db_name ="data10";
$conn = mysqli_connect($servername, $username, $password, $db_name);
if($conn===false)
die("error connecting".mysqli_error());
$Firstname=$_REQUEST['Firstname'];
$Lastname=$_REQUEST['Lastname'];
$Phonenumber=$_REQUEST['Phonenumber'];
$EmailAddress=$_REQUEST['EmailAddress'];
$query = mysqli_query($conn,"INSERT INTO course Values($Firstname,$Lastname,$Phonenumber,$EmailAddress)");
echo "record added successfully";
mysqli_close($conn);
?>
