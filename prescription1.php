<html>
        <title>Dashboard Patients  </title>

<head>

    <link href="csss/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="csss/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="csss/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	
</head>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<?php include "dbconfig.php"; ?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

	<link rel="stylesheet" href="Dashboard.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
		
<style type="text/css">

body   
{  
height: 125vh;  
margin-top: 25px;  
padding: 80px;  
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
box-shadow: 0 0 30px 0 black;   
 z-index: +1; 
}  
header * {  
display: inline;  
}  
header li {  
margin: 20px;  
font-size: 25px;
}  
header li, a {  
color: white;  
text-decoration: none;  
} 


label, li{
	color: #000;
	font-size:15px;
	font-family:sans-serif;
	line-height:1.15;
}

span.container{
position:relative;
left: 450px;
   top: 30px;
     z-index: -1;
}
div.container1{
	float:top;
 right: -530px;
   top: 30px;
    z-index: -1;
}
span.submitcontainer{
position:relative;
left: 200px;
   top: 30px;
     z-index: -1;
}





.contact-form .text-box{
  background: #000;
  color: #fff;
  border: none;
  width: calc(50% - 10px);
  height: 50px;
  padding: 12px;
  font-size: 15px;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}

.contact-form .text-box:first-child{
  margin-right: 15px;
}

.contact-form textarea{
  background: #000;
  color: #fff;
  border: none;
  width: 70%;
  padding: 12px;
  font-size: 15px;
  min-height: 90px;
  max-height: 90px;
  resize: vertical;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}
.sendbtn1{
  float: right;
  background: #2E94E3;
  color: #fff;
  border: none;
  width: 120px;
  height: 40px;
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  transition-property: background;
}
.contact-form .send-btn{
  float: left;
  background: #2E94E3;
  color: #fff;
  border: none;
  width: 120px;
  height: 40px;
  font-size: 15px;
  font-weight: 600;
  text-transform: uppercase;
  letter-spacing: 2px;
  border-radius: 5px;
  cursor: pointer;
  transition: 0.3s;
  transition-property: background;
}



.contact-form .send-btn:hover{
  background: #0582E3;
}



/*css for alert messages*/

.alert-success{
  z-index: 1;
  background: #D4EDDA;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #3AD66E;
  border-radius: 4px;
}

.alert-error{
  z-index: 1;
  background: #FFF3CD;
  font-size: 18px;
  padding: 20px 40px;
  min-width: 420px;
  position: fixed;
  right: 0;
  top: 10px;
  border-left: 8px solid #FFA502;
  border-radius: 4px;
}


.dropbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: #3e8e41;
}




</style>
	   

            <!-- Navigation -->
                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Top Menu Items -->

			<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php"><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong> Prescription</a></li> 
</ul>  
</nav>  
 </header>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="navi">
                    <ul>
                        <li class="active"><a href="ulogin.php"><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dashboard</span></a></li>
						<li><a href="Appointmentbook.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Book Appointment</span></a></li>
                        <li><a href="viewpatientappointments.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Appointments</span></a></li>
                        <li><a href="cancelbookingpatient.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cancel Booking</span></a></li>
						<li><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
						<li ><a href="Vaccination.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccination Pet</span></a></li>
                        <li><a href="cover.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
                    </ul>
                </div>
            </div>


        <div id="page-wrapper">
 	    
				
				
				
			<?php include 'mailprescription.php'; ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Contact Form</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
	
  </head>
  <body>

    <!--alert messages start-->
    <?php echo $alert; ?>
    <!--alert messages end-->

    <!--contact section start-->
    <div class="contact-section">
		
      <div class="contact-form">
        <h2 class="page-head-line">Prescription</h2>
        <form class="contact" action="" method="post">
		<button class="send-btn" onclick="myFunction()">Generate</button>  <button class="sendbtn1"> <a  onclick="document.getElementById('id01').style.display='block'">Result</a></button>
	<br>
	<br>
	<br>
    <input id="demo" name="transaction" class="text-box" placeholder="Transaction ID" required>
    <script>
        var seq = 0;
       
        function myFunction() {
            seq = seq +1;
            number = 'VCAS00'.substr(String(seq).length) + seq
            document.getElementById("demo").value = number;
        }
    </script>
	<br>
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
		  <br>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
		  <br>
		  <input type="contact" name="contact" class="text-box" placeholder="Contact Number" required>
		  <br>
		  <input type="address" name="address" class="text-box" placeholder="Address" required>
		  <br>
		<div class="dropdown">
		<select type="vaccine" name="vaccine" class="dropbtn"  required>
		<option value="Cat Vaccine List">Cat/Dog Vaccine List</option>
		<option></option>
		<option value="Cat Vaccine List">Cat Vaccine </option>
		<option value="Rabies = ₱600">Rabies = ₱600</option>
		<option value="Feline Distemper = ₱480">Feline Distemper = ₱480</option>
		<option value="Feline Herpesvirus = ₱480">Feline Herpesvirus = ₱480</option>
		<option value="Calicivirus = ₱600">Calicivirus = ₱600</option>
		<option value="Feline Leukemia Virus = ₱480">Feline Leukemia Virus = ₱480</option>
		<option value="Bordetella = ₱480">Bordetella = ₱480</option>
		
		<option></option>
		<option value="">Dog Vaccine </option>
		<option value="Rabies 1-year = ₱600">Rabies 1-year = ₱600</option>
		<option value="Rabies 3-year = ₱480">Rabies 3-year = ₱480</option>
		<option value="Distemper = ₱480">Distemper = ₱480</option>
		<option value="Adenovirus,  type 1 (CAV-1, canine hepatitis) = ₱600">Adenovirus,  type 1 (CAV-1, canine hepatitis) = ₱600</option>
		<option value="Adenovirus, type 2 (CAV-2, kennel cough) = ₱480">Adenovirus, type 2 (CAV-2, kennel cough) = ₱480</option>
		<option value="Parainfluenza = ₱480">Parainfluenza = ₱480</option>
		<option value="Bordetella bronchiseptica (kennel cough) = ₱480">Bordetella bronchiseptica (kennel cough) = ₱480</option>
		<option value="Lyme disease = ₱600">Lyme disease = ₱600</option>
		<option value="Leptospirosis = ₱480">Leptospirosis = ₱480</option>
		<option value="Canine influenza = ₱480">Canine influenza = ₱480</option>
		
		</select>
		</div>
		
		<form>
		<br>
		  <br>

	  		 <button class="send-btn" type="button"  onclick="document.getElementById('display').innerHTML = Date()">
				Date and Time </button>
		<br>
		<br>
		<br>
		<textarea type="date" name="date" class="text-box" placeholder="Generate Date" id="display" required></textarea>

		  <br>

          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
	
	


<div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-display-topright">&times;</span>
  <form method="post" action="" id="myfrm">

<table bgcolor="#C4C4C4" align="center" width="380" border="0"> 
<li ><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong> Prescription</a></li>  
<h1>Veterinary Clinic Prescription</h1>
<tr>    
<td  align="center"colspan="2"><font color="#0000FF">Your Output</font></td>  
</tr>
<br> 
<tr>    
<td>Transaction ID</td>    
<td><input type="text" value="<?php echo $_POST['transaction']; ?>" readonly="" /></td>  
</tr>   
<tr>    
<td>Your Name is</td>    
<td><input type="text"  value="<?php echo $_POST['name']; ?>"  readonly="" /></td>  
</tr>  
<tr>    
<td>Your Email is</td>   
<td><input type="email" value="<?php echo $_POST['email']; ?>" readonly="" /></td>  
</tr>   
<tr>    
<td>Your Mobile Number is</td>    
<td><input type="contact" value="<?php echo $_POST['contact']; ?>" readonly=""  /></td>  
</tr>  
<tr>    
<td>Your Address is</td>    
<td><textarea  readonly="readonly"><?php echo $_POST['address']; ?></textarea></td>  
</tr>
<tr>    
<td>Your Vaccine is</td>    
<td><input type="contact" value="<?php echo $_POST['vaccine']; ?>" readonly=""  /></td>  
</tr>  
<tr>    
<td>Date & Time</td>    
<td><textarea placeholder="Generate Date" readonly="readonly"> <?php echo $_POST['date'];?> </textarea></td>  
</tr>
</table>
    <p align="center"><input type="button" onclick="myPrint('myfrm')" value="print"></p>
    <script>
        function myPrint(myfrm) {
            var printdata = document.getElementById(myfrm);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
  </form>

</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
window.onclick = function(event) {
    if (event.target == modal1) {
        modal1.style.display = "none";
    }
}
</script>










	
	


	
	
	
	
    <!--contact section end-->

    </script>	
	
<script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>	



</body>
</html>