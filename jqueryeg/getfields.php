<select id="getfields" size="5" multiple>
<?php
$d=$_GET["d"];
$t=$_GET["t"];
$con=mysqli_connect("localhost","root","",$d);
$result=mysqli_query($con,"select * from $t");
while ($row=mysqli_fetch_field($result))
{
    echo "<option value='".$row->name."'>".$row->name."</option>";
}
?>
</select>
<script>
    $( function() {
        $( "#getfields, #viewfields" ).sortable({
            connectWith: "#getfields, #viewfields"
        }).disableSelection();
    } );
</script>