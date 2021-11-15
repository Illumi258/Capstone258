
<script>
function getTown(val) {
	$.ajax({
	type: "POST",
	url: "get_town.php",
	data:'countryid='+val,
	success: function(data){
		$("#town-list").html(data);
	}
	});
}
function getClinic(val) {
	$.ajax({
	type: "POST",
	url: "getclinic.php",
	data:'townid='+val,
	success: function(data){
		$("#clinic-list").html(data);
	}
	});
}
function getDoctorday(val) {
	$.ajax({
	type: "POST",
	url: "getdoctordaybooking.php",
	data:'cid='+val,
	success: function(data){
		$("#doctor-list").html(data);
	}
	});
}


var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += 1);
}

function currentSlide(n) {
  showSlides(slideIndex = 0);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
    if (n < 1) {slideIndex = slides.length}
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}


</script>
<html>
<head>
<body style="background-color:#ffff">


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js">
</script>

<link rel="stylesheet" href="main.css">
</head><?php include "dbconfig.php"; ?>




<style type="text/css">
label{
	color: #000;
}

.header{
	align-items: center;  
	<!-- box-shadow: 0 0 30px 0 black; 
	 z-index: +2;
	<!--  background-color:#fffff; !important -->
}

body{
z-index: -2;}


/* Slideshow container */
.slideshow-container {
 
  background: #f1f1f1f1;
 
  
}

/* Slides */
.mySlides {
  position:relative;
  left:500
  width: 200 px;
  height: 90 px;
  display:none;
  padding: 80px;
  text-align: center;
  
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: #888;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
  color: white;
}

/* The dot/bullet/indicator container */
.dot-container {
  text-align: center;
  padding: 20px;
  background: #ddd;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

/* Add a background color to the active dot/circle */
.active, .dot:hover {
  background-color: #717171;
}

/* Add an italic font style to all quotes */
q {font-style: italic;
}

/* Add a blue color to the author */
.author {color: cornflowerblue;}


</style>


<body style="background-color:fff">
	<div class="header">
		<ul>
			<li style="float:left;border-right:none"><a href="cover.php" class="logo"><img src="images/l.png" width="65px" height="65px"><strong> Veterinary </strong> Clinic Appointment </a></li>
					<li><a href="cover.php">Home</a></li>
		</ul>
	</div>
	 
    <br><br><br>

	<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width slides/quotes -->
  <div class="mySlides" ><center>
   <p class="author" style="text-align:justify;">About Us</p>
    <q> 
		
                    The Veti Clinic operates an online appointment system to its clienteles.  <br
					The Clinic launched the appointment system in the 3rd quarter of 2020 to accommodate the growing  <br>
					population of loyal and new customers who prefer to set appointments via online.  <br>
		</center>	
	</q>	
  </div>

  <div class="mySlides"><center>
  <p class="author" style="text-align:justify;">Customers First</p>
    <q> 
		
        Building loyalty and good relationship with our customer is our priority. <br>
        The company exist to give the best price without compromising the quality and to<br>
         make each transaction experience easy,safe and 
        accessible to online buyers.
		</center>
	</q>
  </div>

  <div class="mySlides"><center>
    <p class="author" style="text-align:justify;">Mission</p>
    <q>
		
            Our goal is to give our customers the best online shopping experience by giving 
			them the best price and making each transaction  easy,  fast and secured.
		<center>	
	</q>
  </div>
  
    <div class="mySlides" ><center>
    <p class="author" style="text-align:justify;">Vision</p>
    <q>
		
            To be the top of the mind trusted online pet shop nationwide.
		<center>	
	</q>
  </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


  <div class="loc"><center>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.418049301046!2d121.08958311483984!3d14.575238789818616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7e865edbe4b%3A0x285dcadbcbea212a!2sFrancisco%20Legaspi%2C%20Pasig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1604239768428!5m2!1sen!2sph" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
  






<div class="loc">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.418049301046!2d121.08958311483984!3d14.575238789818616!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c7e865edbe4b%3A0x285dcadbcbea212a!2sFrancisco%20Legaspi%2C%20Pasig%2C%20Metro%20Manila!5e0!3m2!1sen!2sph!4v1604239768428!5m2!1sen!2sph" width="1100" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		</div>
<div>
  <!-- Next/prev buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  
</div>


</html>
</body>