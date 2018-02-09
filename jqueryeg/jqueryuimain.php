<html>
<head>

</head>
<body>
<div id="database"></div>
<div id="tbl"></div>
<div id="fetchcol" style="float: left;width: 40%">

    <ul id="getfields"style="border: #0c0c0c">

    </ul>
</div>

<div id="viewcol" style="float: left;width: 40%;border-style: solid">

    <ul id="viewfields" style="border:1px #0c0c0c;width: 100%;height: 50%">

    </ul>
</div>

<br>
<div id="btnview" style="width: 100%;float: left"><button type="button" id="view">View Data</button> </div>
<div id="disp"></div>
</body>
<script src="jquery-1.12.4.js"></script>
<script src="jquery-ui.js"></script>
<!--<script>
    $(function() {


    });
</script>-->
<script >
    $(document).ready(function () {
        //alert("in");

        $.ajax({url: "getdatabase.php", success: function(result){
                //alert(result);
                $("#database").html(result);
            }});
        $('#database').change('#databaseselect',function () {
            var dt=$('#databaseselect').val();
            //alert(dt);
            $.ajax({url: "gettables.php",
                type:'get',
                data: {
                    d:dt
                },
                success: function(result){
                    //alert(result);
                    $("#tbl").html(result);
                }});
        });
        $('#tbl').change('#tableselect',function () {
            var dt=$('#databaseselect').val();
            var tl=$('#tableselect').val();
            //alert(tl);
            $.ajax({
                url: "getfields2.php",
                type: 'get',
                data:{
                    d:dt,
                    t:tl
                },
                success:function (result) {
                    //alert(result);
                    $('#fetchcol').html(result);
                }
            });
        });
        $('#view').click(function (e) {

            var f=$('#viewfields li').get();
            var dt=$('#databaseselect').val();
            var tl=$('#tableselect').val();
            var s="";
            for (var i=0;i<f.length;i++)
            {
                if(s=="")
                    s+=f[i].innerHTML;
                else
                    s=s+","+f[i].innerHTML;
            }
            alert(s);
            $.ajax({
                url: "getdata.php",
                type: 'get',
                data:{
                    d:dt,
                    t:tl,
                    st:s
                },
                success:function (result) {
                    //alert(result);
                    $('#disp').html(result);
                }
            });
        });
    });
</script>
</html>
