<table border="1">
<?php
$d=$_GET["d"];
$t=$_GET["t"];
$s=$_GET["st"];
$a=array();
$i=0;
$con=mysqli_connect("localhost","root","",$d);
$result=mysqli_query($con,"select $s from $t");
echo "<tr>";
while ($row=mysqli_fetch_field($result))
{
    echo "<td>".$row->name."</td>";
    $a[$i]=$row->name;
    $i++;
}
echo "</tr>";
while ($row=mysqli_fetch_array($result))
{
    echo "<tr>";
    for($j=0;$j<$i;$j++)
    {
        echo "<td>".$row[$a[$j]]."</td>";
    }
    echo "</tr>";
}
?>
</table>
