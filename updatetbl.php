<html>
<head>
    <title></title>
</head>
<?php
$con = mysqli_connect("localhost", "root", "", "try");
$callp="call upd_tbl_rec(".$_GET["u"].")";
$r=mysqli_query($con,$callp);
$row = mysqli_fetch_array($r)
?>
<body>
<form name="frm" method="post" action="#">
    <table>
        <tr>
            <td>ID:</td>
            <td><input type="text" name="idd" value="<?php echo $row[0]?>" ></td>
        </tr>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="nm" value="<?php echo $row[1]?>"></td>
        </tr>
        <tr>
            <td>Mobile no.:</td>
            <td><input type="number" name="mob" value="<?php echo $row[2]?>"> </td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><textarea name="add" rows="5" cols="40"><?php echo $row[3]?></textarea></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="updsub" value="Update"></td>
        </tr>
    </table>
</form>
</body>
</html>
<?php
if(isset($_POST["updsub"])) {
function upd($i,$n,$m,$a)
{
$con = mysqli_connect("localhost", "root", "", "try");
$callp="call upd_tbl('".$i."','".$n."','".$m."','".$a."')";
$r=mysqli_query($con,$callp);
}
upd($_POST["idd"],$_POST["nm"],$_POST["mob"],$_POST["add"]);
    header('Location: viewtbl.php');
/*$con = mysqli_connect("localhost", "root", "", "try");
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
$sql="insert into tbl(nm,mob,address) VALUES ('".$_POST["nm"]."','".$_POST["mob"]."','".$_POST["add"]."')";
if(mysqli_query($con,$sql))
{
echo "done";
}
else
{
echo "not done";
}*/
}
?>