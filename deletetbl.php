<?php
if(isset($_GET["d"])) {
    function del($i)
    {
        $con = mysqli_connect("localhost", "root", "", "try");
        $callp = "call del_tbl('" . $i . "')";
        $r = mysqli_query($con, $callp);
    }
    echo $_GET["d"];
    del($_GET["d"]);
    header('Location: viewtbl.php');
}
?>