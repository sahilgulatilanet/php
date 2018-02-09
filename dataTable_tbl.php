<html>
<head>

</head>

<body>
<table id="myTable" class="display" cellspacing="0">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile no</th>
        <th>Address</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </thead>
    <tfoot>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile no</th>
        <th>Address</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    </tfoot>
    <tbody>
    <?php
    $con = mysqli_connect("localhost", "root", "", "try");
    $callp="call view_tbl";
    $r=mysqli_query($con,$callp);
    while ($row = mysqli_fetch_array($r)){
        echo "<tr><td>".$row[0]."</td><td> ".$row[1]."</td><td> ".$row[2]."</td><td> ".$row[3]."</td><td><a href='updatetbl.php?u=".$row[0]."'>update</a></td><td><a href='deletetbl.php?d=".$row[0]."'>delete</a></td></tr>";
    }
    ?>
    </tbody>
</table>
</body>
<!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">-->
<script src="js/jquery-1.12.4.js"></script>
<script src="js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/jquery.dataTables.min.css">

<script>
    $(document).ready(function(){
        $('#myTable').DataTable();
    });
</script>
</html>