<?php
$con = mysqli_connect("localhost", "root", "", "try");
$id=$_GET["d"];
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sql="update demo set dflag=1 where did=".$id;
echo $sql;
if(mysqli_query($con,$sql))
{
echo "done";
}
else
{
echo "not done";
}
header('Location: demoview.php');
?>