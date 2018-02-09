<html>
<head>

</head>
<body>
<table border="1" cellpadding="10px">
    <?php
    $con = mysqli_connect("localhost", "root", "", "try");
    $callp="Select * from demo where dflag=0";
    $r=mysqli_query($con,$callp);
    while ($row = mysqli_fetch_array($r)){
        echo "<tr><td>".$row[0]."</td><td> ".$row[1]."</td><td> ".$row[2]."</td><td><a href='deletedemo.php?d=".$row[0]."'>delete</a></td></tr>";
    }
    ?>
</table>
</body>
</html>