<html>
<head>

</head>
<body>
<div id="tbldata"></div>
</body>
<script>
    function showdata() {
        var xhttp;
        alert("in");
        xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("tbldata").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "getdatatbl.php", true);
        xhttp.send();
    }
    showdata();
</script>
</html>