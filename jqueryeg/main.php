<html>
<head>


</head>

<body>
<div id="database"></div>
<div id="tbl"></div>
<div id="fetchcol" style="float: left;width: 40%">
    <select size="5">

    </select>
</div>
<div id="btn" style="float: left;width: 20%"><button type="button" id="btnRightAll"> >> </button> <br>
    <button type="button" id="btnRight"> > </button> <br>
    <button type="button" id="btnLeft"> < </button><br>
    <button type="button" id="btnLeftAll"> << </button> <br>
    <button type="button" id="up">up</button>
    <button type="button" id="down">Down</button>


</div>
<div id="viewcol" style="float: left;width: 40%">
    <select size="5" id="viewfields" multiple>

    </select>
</div>

<br>
<div id="btnview" style="width: 100%;float: left"><button type="button" id="view">View Data</button> </div>
<div id="disp"></div>
</body>
<script src="jquery.min.js"></script>
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
                url: "getfields.php",
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

        $('#btnRight').click(function (e) {
            var selectedOpts = $('#getfields option:selected');
            if (selectedOpts.length == 0) {
                alert("Nothing to move.");
                e.preventDefault();
            }
            $('#viewfields').append($(selectedOpts).clone());
            $(selectedOpts).remove();
            e.preventDefault();
        });
        $('#btnRightAll').click(function (e) {
            var selectedOpts = $('#getfields option');
            if (selectedOpts.length == 0) {
                alert("Nothing to move.");
                e.preventDefault();
            }
            $('#viewfields').append($(selectedOpts).clone());
            $(selectedOpts).remove();
            e.preventDefault();
        });
        $('#btnLeftAll').click(function (e) {
            var selectedOpts = $('#viewfields option');
            if (selectedOpts.length == 0) {
                alert("Nothing to move.");
                e.preventDefault();
            }
            $('#getfields').append($(selectedOpts).clone());
            $(selectedOpts).remove();
            e.preventDefault();
        });
        $('#btnLeft').click(function (e) {
            var selectedOpts = $('#viewfields option:selected');
            if (selectedOpts.length == 0) {
                alert("Nothing to move.");
                e.preventDefault();
            }
            $('#getfields').append($(selectedOpts).clone());
            $(selectedOpts).remove();
            e.preventDefault();
        });
        $('#view').click(function (e) {
            var selectedOpts = $('#viewfields option').get();
           var s="";
            var dt=$('#databaseselect').val();
            var tl=$('#tableselect').val();
            //$('#f').html(selectedOpts);
            //alert(selectedOpts);
            for (var i=0;i<selectedOpts.length;i++)
            {
                if(s=="")
                    s+=selectedOpts[i].innerHTML;
                else
                    s=s+","+selectedOpts[i].innerHTML;
            }
           //alert(s);
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
        $('#up').click(function () {
            //alert("hi");
            $('#viewfields > option:selected').each(function (i, selected) {
                $(this).insertBefore($(this).prev());
            });
        });
        $('#down').click(function () {
            //alert("hi");
            $('#viewfields > option:selected').each(function (i, selected) {
                $(this).insertAfter($(this).next());
            });
        });
    });

</script>
</html>