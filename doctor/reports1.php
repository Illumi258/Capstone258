<html>
        <title>View Patient Appointments  </title>
<head>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<?php include "dbconfig.php"; ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="Dashboard.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">	

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



<style type="text/css">
body   
{  
height: 125vh;  
margin-top: 25px;  
padding: 60px;  
background-size: cover;  
font-family: sans-serif;  
}  
header {  
background-color: #2B3856;  
position: fixed;  
left: 0;  
right: 0;  
top: 5px;  
height: 100px;  
display: flex;  
align-items: center;  
box-shadow: 0 0 30px 0 black;     z-index: +1;
}  
header * {  
display: inline;  
}  
header li {  
margin: 20px;  
font-size: 15px;
}  
header li a {  
color: white;  
text-decoration: none;  
}  

label, header, li{

	color: #000;
	font-size:15px;
	font-family:sans-serif;

}

td{
font-size:13px;
	font-family:sans-serif;
}

.container-fluid 
{
position:relative;
	left: 60px;
	top: 20px;
 width: 1100px;
height: 1200px;	
}

.wrapper1 {
padding: 40;
}
</style>


<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php" ><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong>Reports</a></li>
					<?php session_start();?>	
</ul>
</nav>
</header> 

<html lang="en">

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
						
                <li>
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









  <div id="page-wrapper">
                <div class="container-fluid">
                    
                    <!-- Page Heading -->

                    <!-- Page Heading end-->

                    <!-- panel start --> 	
			
			
			
			
                    <div class="panel panel-primary filterable">

                        <!-- panel heading starat -->
                        <div class="panel-heading">
                            <h3 class="panel-title">Reports
                            <div class="pull-right">
                            <button class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Search</button>
                        </div>
                        </div>
						</h3>
                        <!-- panel heading end -->

                        <div class="panel-body">
                        <!-- panel content start -->
                           <!-- Table -->
		
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr class="filters">
                                    <th><input type="text" class="form-control" placeholder="TransactionID" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Appointment Date" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Clinic" disabled></th>
									<th><input type="text" class="form-control" placeholder="Animals" disabled></th>
									<th><input type="text" class="form-control" placeholder="Vaccine Injected" disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Total Payment " disabled></th>
                                    <th><input type="text" class="form-control" placeholder="Order Status " disabled></th>
                                </tr>
                            </thead>
							
							
<?php
	

	$username=$_SESSION['username'];
	$sql1 = "Select * from book where username ='".$username."' order by DOV desc";
			$result1=mysqli_query($conn, $sql1); 
			
			while($row1 = mysqli_fetch_array($result1))
			{
				$sql2="SELECT * from doctor where did=".$row1['DID'];
				$result2= mysqli_query($conn,$sql2);
				while($row2= mysqli_fetch_array($result2))
				{
					$sql3="SELECT * from clinic where CID=".$row1['CID'];
						$result3= mysqli_query($conn,$sql3);
						while($row3= mysqli_fetch_array($result3))
						{

								echo "<tr>";
								echo "<td>" . $row1['TransactionID'] . "</td>";
								echo "<td>" . $row1['DOV'] . "</td>";
								echo "<td>" . $row1['Fname'] . "</td>";
								echo "<td>" . $row3['name']."-".$row3['town'] . "</td>";
								echo "<td>" . $row1['ConsultedAnimal'] . "</td>";
								echo "<td>" . $row1['Injectedvaccine'] . "</td>";
								echo "<td>" . $row1['Payment'] . "</td>";
								echo "<td>" . $row1['StatusPayment'] . "</td>";
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
			</table>
  <?php
        $query2 = "select * from book order by id desc limit 1";
        $result2 = mysqli_query($conn,$query2);
        $row = mysqli_fetch_array($result2);
        $last_id = $row['id'];
        if ($last_id == "")
        {
            $TransactionID = "OVCA1";
        }
        else
        {
            $TransactionID = substr($last_id, 3);
            $TransactionID = intval($TransactionID);
            $TransactionID = "OVCA" . ($TransactionID + 1);
        }
    ?>

			<div class="text-center">
			<button onclick="window.print();">Print</button>
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
