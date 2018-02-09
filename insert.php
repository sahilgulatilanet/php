<html>
<head>
    <title></title>
</head>
<body>
<form name="frm" method="post" action="#">
<table>
    <tr>
        <td>Name:</td>
        <td><input type="text" name="nm" ></td>
    </tr>
    <tr>
        <td>Mobile no.:</td>
        <td><input type="number" name="mob"> </td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><textarea name="add" rows="5" cols="40"></textarea></td>
    </tr>

    <tr>
        <td></td>
        <td><input type="submit" name="inssub" value="Insert"></td>
    </tr>
</table>
</form>
</body>
</html>
<?php
if(isset($_POST["inssub"])) {
    function ins($n,$m,$a)
    {
        $con = mysqli_connect("localhost", "root", "", "try");
        $callp="call ins_tbl('".$n."','".$m."','".$a."')";
        $r=mysqli_query($con,$callp);
    }
    ins($_POST["nm"],$_POST["mob"],$_POST["add"]);
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