<html>
<head>

</head>
<body>
<form name="frm" method="post" action="#">
    <input type="text" name="nm" required>
    <input type="email" name="em" required>
    <input type="url" name="web" required>
    <input type="submit" name="sub" value="Submit">
</form>
<?php
    if(isset($_POST["sub"]))
    {
        echo $_POST["nm"];
        echo $_POST["em"];
    }
?>
</body>
</html>
