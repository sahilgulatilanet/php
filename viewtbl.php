<html>
<head>

</head>
<body>
<table border="1" cellpadding="10px">
<?php
$con = mysqli_connect("localhost", "root", "", "try");
$callp="call view_tbl";
$r=mysqli_query($con,$callp);
while ($row = mysqli_fetch_array($r)){
    echo "<tr><td>".$row[0]."</td><td> ".$row[1]."</td><td> ".$row[2]."</td><td> ".$row[3]."</td><td><a href='updatetbl.php?u=".$row[0]."'>update</a></td><td><a href='deletetbl.php?d=".$row[0]."'>delete</a></td></tr>";
}
?>
</table>
</body>
</html>
