<select id="tableselect">
    <option value="">Selected Table</option>
<?php
$d=$_GET["d"];
$con=mysqli_connect("localhost","root","");
$result=mysqli_query($con,"show tables from $d");
while ($row=mysqli_fetch_array($result))
{
    echo "<option value='".$row[0]."'>".$row[0]."</option>";
}
?>
</select>
