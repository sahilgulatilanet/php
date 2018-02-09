<select id="databaseselect">
    <option value="">Select Database</option>
<?php
$con=mysqli_connect("localhost","root","");
$result=mysqli_query($con,"show Databases");
while ($row=mysqli_fetch_assoc($result))
{
    echo "<option value='".$row["Database"]."'>".$row["Database"]."</option><br>";
}
?>
</select>

