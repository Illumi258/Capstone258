
<style type="text/css">
.wrapper1 {
padding: 40;
}
</style>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title> Show Veterinarians Schedule</title>
        <!-- Bootstrap Core CSS -->
        <!-- <link href="assets/css/bootstrap.css" rel="stylesheet"> -->
        <link href="assets/css/material.css" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="assets/css/sb-admin.css" rel="stylesheet">
        <link href="assets/css/time/bootstrap-clockpicker.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
        <!-- Special version of Bootstrap that only affects content wrapped in .bootstrap-iso -->
        <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" /> 

        <!--Font Awesome (added because you use icons in your prepend/append)-->
        <link rel="stylesheet" href="https://formden.com/static/cdn/font-awesome/4.4.0/css/font-awesome.min.css" />

        <!-- Inline CSS based on choices in "Settings" tab -->
        <style>.bootstrap-iso .formden_header h2, .bootstrap-iso .formden_header p, .bootstrap-iso form{font-family: Arial, Helvetica, sans-serif; color: black}.bootstrap-iso form button, .bootstrap-iso form button:hover{color: white !important;} .asteriskField{color: red;}</style>

        <!-- Custom Fonts -->
    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <img src="managerr.png" style="float:left;  margin-left: 15px; margin-top: 3px; border-right:none; width:69px; height:69px"> <a  href="mgrmenu.php" class="navbar-brand" style="margin-left: -15px"> Show Veterinarians Schedule </a>
                </div>
                <!-- Top Menu Items -->

                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div class="wrapper1">
				
				
				
				
				
                    <ul class="nav navbar-nav side-nav">
                        <li >
	
                            <a href="mgrmenu.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                        </li>
						
								<li>
				<a href="changebookingstatus.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-fw fa-table"></i> Registered Appointments   </i></a>

                            <!--<a href="doctordashboard.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>-->
                        </li>
				<li >
				<a href="recommendation.php" data-toggle="collapse" data-target="#submenu-1"><i class="fa fa-file"></i> Appointment Transfer  </i></a>   
                        </li>		
						
                <li class = "active">
                    <a href="managerindoctorsched.php" data-toggle="collapse" data-target="#submenu-2"><i class="fa fa-fw fa-star"></i>  Doctor Schedule </a>

                </li>		
						
				
                        <li>
                            <a href="managerpatientlist.php"><i class="fa fa-fw fa-edit"></i> Patient List</a>
                        </li>
						
                            <li>
                                <a href="logout.php?logout"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
						
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <!-- navigation end -->

    <div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >




<!--
<center><h1>SHOW VETERINARIANS SCHEDULE</h1>
--> 


            <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->
                    <div class="row">
                        <div class="col-lg-12">
                            <ol class="breadcrumb">
                            </ol>
                        </div>
                    </div>
                    <!-- Page Heading end-->

                    <!-- panel start -->
                    <div class="panel panel-primary filterable">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">List of Veterinarians Schedule</h3>
                            <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
                        </div>
                        </div>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="CID" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Clinic Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="DID" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Doctor Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Day" disabled></th>
                                    <!-- <th><input type="text" class="form-control" placeholder="Email" disabled></th> -->
                                    <th><input type="text" class="form-control" placeholder="Time" disabled></th>


                                </tr>
                            </thead>
<?php
$con = mysqli_connect('localhost','root','','wt_database');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$sql="SELECT * FROM doctor_availability order by DID,CID ASC";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result))
{
	$sql1="SELECT * from doctor where DID=".$row["did"];
	$result1= mysqli_query($con,$sql1);
	while($row1= mysqli_fetch_array($result1))
	{
	$sql2="SELECT * from clinic where CID=".$row["cid"];
	$result2= mysqli_query($con,$sql2);
	while($row2= mysqli_fetch_array($result2))
	{
	
    echo "<tr>";
	echo "<td>" . $row['cid'] . "</td>";
    echo "<td>" . $row2['name']."-".$row2['town'] . "</td>";
	echo "<td>" . $row['did'] . "</td>";
    echo "<td>" . $row1['name'] . "</td>";
	echo "<td>" . $row['day'] . "</td>";
    echo "<td>" . $row['starttime']."-".$row['endtime']. "</td>";
    echo "</tr>";
	
	

	}
	}
}












?>












            </div>
			
			
			
			

        </div>

    </div>		

                </div>
            </div>
        <script src="../patient/assets/js/jquery.js"></script>
        <script type="text/javascript">
$(function() {
$(".delete").click(function(){
var element = $(this);
var ic = element.attr("id");
var info = 'ic=' + ic;
if(confirm("Are you sure you want to delete this?"))
{
 $.ajax({
   type: "POST",
   url: "deletepatient.php",
   data: info,
   success: function(){
 }
});
  $(this).parent().parent().fadeOut(300, function(){ $(this).remove();});
 }
return false;
});
});
</script>
 <script type="text/javascript">
            /*
            Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
            */
            $(document).ready(function(){
                $('.filterable .btn-filter').click(function(){
                    var $panel = $(this).parents('.filterable'),
                    $filters = $panel.find('.filters input'),
                    $tbody = $panel.find('.table tbody');
                    if ($filters.prop('disabled') == true) {
                        $filters.prop('disabled', false);
                        $filters.first().focus();
                    } else {
                        $filters.val('').prop('disabled', true);
                        $tbody.find('.no-result').remove();
                        $tbody.find('tr').show();
                    }
                });

                $('.filterable .filters input').keyup(function(e){
                    /* Ignore tab key */
                    var code = e.keyCode || e.which;
                    if (code == '9') return;
                    /* Useful DOM data and selectors */
                    var $input = $(this),
                    inputContent = $input.val().toLowerCase(),
                    $panel = $input.parents('.filterable'),
                    column = $panel.find('.filters th').index($input.parents('th')),
                    $table = $panel.find('.table'),
                    $rows = $table.find('tbody tr');
                    /* Dirtiest filter function ever ;) */
                    var $filteredRows = $rows.filter(function(){
                        var value = $(this).find('td').eq(column).text().toLowerCase();
                        return value.indexOf(inputContent) === -1;
                    });
                    /* Clean previous no-result if exist */
                    $table.find('tbody .no-result').remove();
                    /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
                    $rows.show();
                    $filteredRows.hide();
                    /* Prepend no-result row if all rows are filtered */
                    if ($filteredRows.length === $rows.length) {
                        $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
                    }
                });
            });
        </script>
        
        <!-- Bootstrap Core JavaScript -->
        <script src="../patient/assets/js/bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-clockpicker.js"></script>
        <!-- Latest compiled and minified JavaScript -->
         <!-- script for jquery datatable start-->
        <!-- Include Date Range Picker -->













    </body>
</html>