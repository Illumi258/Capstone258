
        <title>Dashboard Patients  </title>

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

* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
	position:fixed;
	left: 250px;
	top: 72px;
    max-width: 1460px;
   max-height: 1200px;
margin: auto;
z-index: -1;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {

  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 2s ease;
   
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 10.5s;
  animation-name: fade;
  animation-duration: 10.5s;
}

@-webkit-keyframes fade {
  from {opacity: 1} 
  to {opacity: .8}
}

@keyframes fade {
  from {opacity: 1} 
  to {opacity: .8}
  
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
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
					&nbsp;<strong>Payment </a></li> 
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
						<li><a href="book.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Book Appointment</span></a></li>
                        <li><a href="viewpatientappointments.php"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Show Appointments</span></a></li>
                        <li><a href="cancelbookingpatient.php"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Cancel Booking</span></a></li>
						<li><a href="ulocateus.php"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Veterinarians</span></a></li>
                        <li><a href="cover.php"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Log Out</span></a></li>
                    </ul>
                </div>
            </div>

<head>

    <!-- BOOTSTRAP STYLES-->
    <!-- FONTAWESOME STYLES-->
    <link href="csss/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="csss/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="csss/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>












<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Paypal Payment</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main id="cart-main">
        <div class="site-title text-center">
            <h1 class="font-title">Payments</h1>
        </div>

        <div class="container">
            <div class="grid">
                <div class="col-1">
                    <div class="flex item justify-content-between">
                        <div class="flex">

                            <div class="title">
                                <h3>Total Payments</h3>
                                <span>Appointment of Pets</span>


                                <a href="#">Save for later</a> |
                                <a href="#">Delete From Appointments</a>
                            </div>
                        </div>
                        <div class="price">
                            <h4 class="text-red">₱1800</h4>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <div class="subtotal text-center">
                        <h3>Price Details</h3>

                        <ul>
                            <li class="flex justify-content-between">
                                <label for="price">Pet Consultation : </label>
                                <span>₱1300</span>
								
                            </li>
							   <li class="flex justify-content-between">
                                <label for="price">Down Payments : </label>
                                <span>₱500</span>
								
                            </li>
			
			
                            <li class="flex justify-content-between">
                                <label for="price">Booking Charges : </label>
                                <span>Free</span>
                            </li>
                            <hr>
                            <li class="flex justify-content-between">
                                <label for="price">Amout Payble : </label>
                                <span class="text-red font-title">₱1800</span>
                            </li>
                        </ul>
                        <div id="paypal-payment-button">

                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<?php
if(isset($_POST['paypal-payment-button']))
{
		
		include 'dbconfig.php';

		$Payment="Paid";
		$sql = "INSERT INTO book (Payment) VALUES ('$Payment') ";
		
				{
					echo "Error: " . $sql . "<br>" . mysqli_error($conn);
				}
			}

?>		
		
		
		
    </main>
	
	
	
	

    <script src="https://www.paypal.com/sdk/js?client-id=AbRJEdD_ISzEFmWUjY-w1sCfwNlreVV5AfhSZ_tz51zTASvnR6TGOpkDaqYnf5TlLv9-D4gzfBigmpCF&disable-funding=credit,card"></script>
    <script type="text/javascript">
	
	paypal.Buttons({
    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '36'
					
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/capstone22/reports1.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/capstone22/Oncancel.php")
    }
	
	
	

	
}).render('#paypal-payment-button');


function payment_online(){
    $('[name="payment_method"]').val("Online Payment")
    $('[name="paid"]').val(1)
    $('#place_order').submit()
}
$(function(){
    $('[name="order_type"]').change(function(){
        if($(this).val() ==2){
            $('.address-holder').hide('slow')
        }else{
            $('.address-holder').show('slow')
        }
    })
    $('#place_order').submit(function(e){
        e.preventDefault()
        start_loader();
        $.ajax({
            url:'classes/Master.php?f=place_order',
            method:'POST',
            data:$(this).serialize(),
            dataType:"json",
            error:err=>{
                console.log(err)
                alert_toast("an error occured","error")
                end_loader();
            },
            success:function(resp){
                if(!!resp.status && resp.status == 'success'){
                    alert_toast("Order Successfully placed.","success")
                    setTimeout(function(){
                        location.replace('./')
                    },2000)
                }else{
                    console.log(resp)
                    alert_toast("an error occured","error")
                    end_loader();
                }
            }
        })
    })
})
	
	    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
	
	</script>
	
	
	
	
</body>
</html>




</body>
</html>