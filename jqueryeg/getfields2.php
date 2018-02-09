<ul id="getfields">
<?php
$d=$_GET["d"];
$t=$_GET["t"];
$con=mysqli_connect("localhost","root","",$d);
$result=mysqli_query($con,"select * from $t");
while ($row=mysqli_fetch_field($result))
{
    echo "<li>".$row->name."</li>";
}
?>
</ul>
<script>
    $( function() {
        $( "#getfields, #viewfields" ).sortable({
            connectWith: "#getfields, #viewfields"
        }).disableSelection();
    } );
</script>