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
  width: 100%;
  padding: 12px;
  font-size: 15px;
  min-height: 200px;
  max-height: 400px;
  resize: vertical;
  border-radius: 5px;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
  margin-bottom: 20px;
  opacity: 0.9;
}

.contact-form .send-btn{
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


.tabs-container .nav-tabs .nav-link.active {
    background: url(/_uploads/images/2021/template/TealTab.svg) no-repeat;
    color: #01276E;
}
.tabs-container .nav-tabs .nav-link.active, .tabs-container .nav-tabs .nav-item.show .nav-link {
    color: #495057;
    background-color: #fff;
    border-color: #dee2e6 #dee2e6 #fff;
}
.get-involved .nav-tabs .nav-link.active, .staff-directory-page .nav-tabs .nav-link.active, .department-directory-page .nav-tabs .nav-link.active, .tabs-container .nav-tabs .nav-link.active {
    background: url(/_uploads/images/2021/template/TealTab.svg) no-repeat;
    color: #01276E;
}
.tabs-container .nav-tabs .nav-link {
    margin: 0;
    padding: 24
px
 20
px
 10
px
 20
px
;
    border: 0;
    color: #272727;
    background-size: cover !important;
    background-position: top !important;
    font-family: "Gotham Bold";
    font-family: var(--ss);
    font-weight: 700;

    width: 159
px
;
    text-align: center;
    line-height: 1.2;
}
.tabs-container .nav-tabs .nav-link {
    border: 1




</style>
	   

            <!-- Navigation -->
                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Top Menu Items -->

			<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php"><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong>Emergency Cases</a></li> 
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
            <div id="page-inner">
                <!-- /. ROW  -->

				
			<h2 class="page-head-line">Emergency Cases</h2>	    
				
				
				
				
				
				
				
				
				
				
				
				
<section >
                            <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                                                                                                <div class="container tabs-container pb-4">
    <div>                            <ul class="nav nav-tabs"  role="tablist" >
                    <li class="nav-item" role="presentation">
                    <a aria-controls="tabs-1-1" aria-label="International Student &amp; Scholar Services" aria-selected="true" class="nav-link active" data-toggle="tab" href="#tab-1-1" role="tab">Terms & condition for Veterinary Emergencies Pet </a>
                                    </li>
			
                                    </ul>
        <div class="tab-content white_bg" id="TabContent-1">
                                                                    <div aria-label="Study Abroad" class="tab-pane show" id="tab-1-1" role="tabpanel">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title size-20">
                            <a aria-label="Study Abroad" class="collapsed" data-parent=".tab-pane" data-toggle="collapse" href="#tab-1-collapse-1">Veterinary Emergencies</a>
                        </h3>
                    </div>
					
                    <div class="panel-collapse collapse" id="tab-1-collapse-1">
                        <div class="panel-body pb-3">
                                                                                                                                                <section class=" section-tab-top">    <div class="container">
                            <div class="row">
                      <div class="col-md-12 ">
                     <div class="wysiwyg">
                    <p>While no owner hopes to ever have to visit a veterinary emergency clinic, sometimes it is unavoidable. Our pets are no different than us in that they can experience an illness, injury, or accident at any time of the day or week. While there are situations where your pet can wait to be seen until their primary care veterinarian is available, there are also conditions where waiting can be deadly. If you feel that the seriousness of your pet’s condition cannot wait, trust your gut and get them seen by a veterinarian as soon as possible. If you are unsure, here is a list of some general situations that require immediate attention by a veterinarian. </p>
                    </div>
                                                                    </div>
            </div></div>
    </section>
                                                                                                                        </div>
                    </div>
                </div>
            </div>
    </section>
	
	<section class=" section-page">    <div class="container">
                   <h2 class="text-blue" id="">Veterinary Emergencies That Can't Wait</h2>
				   <h3>Difficulty Breathing</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
                    <p>If your pet exhibits any sign of respiratory distress, it should be evaluated by a veterinarian immediately. While this symptom can be caused by any number of things, a veterinarian can perform diagnostic testing to assess the cause. Our facility offers 24-hour oxygen support for patients that have difficulty oxygenating on their own.</p>

                    </div>
                                                                    </div>
            </div></div>
    </section>	
	
	<section class=" section-page">    <div class="container">
				   <h3>Straining to Urinate or Defecate</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
					<p>An inability to pass urine or feces may indicate a blockage. It is important for a veterinarian to assess the cause of the straining and evaluate if your pet is painful. Straining to urinate is especially concerning in male cats. Some male cats will develop crystals or mucous plugs in their urine that will get stuck in their narrow urethra. With nowhere to go, the urine will continue to accumulate in the bladder, causing pain and possible bladder rupture. With an inability to urinate, the body cannot rid itself of waste produced by the kidneys. These enzymes will build up to a toxic level and eventually cause death if treatment is not addressed in a timely manner.</p>
                    </div>
                                                                    </div>
            </div></div>
    </section>		
	
	<section class=" section-page">    <div class="container">
				   <h3>Bloated or Distended Abdomen</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>A bloated abdomen accompanied by discomfort, stretching, or gagging can be signs of the life-threatening condition in dogs known as a GDV (Gastric Dilatation-Volvulus). In a GDV, the stomach expands from food and gas and proceeds to twist (volvulus). Contents of the stomach cannot be expelled and blood flow is restricted. It is important to seek veterinary care immediately, as this series of events will lead to shock and sudden death. Surgery is needed to treat a GDV and in most cases, the sooner your pet receives treatment, the better. While this condition is still not fully understood, studies have shown that large breed and deep-chested dogs are at higher risk of developing a GDV.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	
	<section class=" section-page">    <div class="container">
				   <h3>Seizures</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>If your pet has a seizure, a veterinarian should evaluate the cause. While a single seizure may not be life-threatening, multiple or cluster seizures can result in hyperthermia. While idiopathic epilepsy is a common cause of seizures in younger dogs, brain tumors, trauma, and toxins should also be ruled out. Epilepsy is extremely uncommon in cats. Any cat that is having a seizure should be evaluated by a veterinarian as soon as possible.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	<section class=" section-page">    <div class="container">
				   <h3>Injury to the Eye</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>When it comes to the eye, time is of the essence. While obvious injuries are veterinary emergencies, excessive squinting or pawing at the eye can also indicate a problem that requires immediate attention. While many injuries to the eye are treatable, the sooner they are addressed, the better the prognosis.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	<section class=" section-page">    <div class="container">
				   <h3>Vomiting or Diarrhea for Over 24 Hours</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>While we have all had a pet exhibit gastrointestinal discomfort from time to time, vomiting or diarrhea that does not resolve will lead to dehydration. Several episodes of vomiting or diarrhea need to be evaluated for the underlying cause, and a dehydrated pet may need to be hospitalized for supportive care.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	<section class=" section-page">    <div class="container">
				   <h3>Heat Stroke</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>Warmer temperatures increase the risk of your pet becoming overheated while outdoors. Symptoms of heat stroke are: excessive panting, reddened gums, excessive drooling, vomiting/diarrhea, weakness, and lethargy. Left untreated, heat stroke can be fatal.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	<section class=" section-page">    <div class="container">
				   <h3>Hit by a Car</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>While many injuries sustained from vehicular trauma will be obvious emergencies, some will not. Even if your pet appears to be fine after being hit by a car, internal injuries can take time to reveal themselves. In the event that your pet is hit by a car, it is always best to have a veterinarian perform a complete physical exam to rule out any and all injuries.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	<section class=" section-page">    <div class="container">
				   <h3>Inability to Move Rear Legs</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>While there can be several causes, the common cause for this in a dog is IVDD (intervertebral disc disease). If a ruptured disc causes spinal cord compression, a dog can develop difficulty walking or develop paralysis in their hind end. A veterinarian should evaluate your pet as soon as possible to assess neurologic status and decide if emergency surgery is required. This condition can also develop in cats, but is rare. If your cat has difficulty walking on one or both rear legs, this is also a sign of a medical emergency. Feline aortic thromboembolism (also known as a saddle thrombus) is a very serious condition in which a blood clot becomes lodged in the arteries that supply blood to the back legs. Cats suffering from saddle thrombus will also seem painful, and the affected rear limb(s) will be cold to the touch.</p>
					
					</div>
                                                                    </div>
            </div></div>
    </section>	
	<section class=" section-page">    <div class="container">
				   <h3>Suspected Exposure / Ingestion of a Toxic Substance or Foreign Object</h3>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
				<p>If you suspect that your pet has come into contact or ingested a toxic substance after hours, call an emergency veterinarian. They may or may not instruct you to contact the Animal Poison Control Center before heading to the hospital. Common toxins seen in dogs are: chocolate, antifreeze, grapes, pharmaceuticals, and rodenticide. This list could go on and on however, since dogs tend to be mischievous and apt to ingest just about anything. Cats are not as prone to eating things but are commonly seen to treat toxicities for: various ingested plants (lilies are a big one), rodenticide, and exposure to canine flea/tick prevention. If your pet consumes something out of the ordinary, don’t assume that it is safe. Many are surprised to learn of all the different foods and plants that are toxic to our pets. When in doubt, always contact the Animal Poison Control Center.</p>
				<br>
				<p>If your dog or cat consumes a foreign object, there is a possibility that it can cause a gastric or intestinal obstruction. Cats will commonly ingest string, tinsel, and hair ties while dogs enjoy socks and toys. Catching this situation early can sometimes prevent surgery. Some patients will benefit from being given a medication that will induce vomiting and remove the object from the stomach. If the object is too large or dangerous to vomit, an endoscope may be used to retrieve the object while the patient is under anesthesia.</p>
					</div>
                                                                    </div>
            </div></div>
    </section>	
	
	
	
	
	
	
	
	<section class=" section-page">    <div class="container">
                   <h2 class="text-blue" id="">Emergency Contact Phone Numbers</h2>
                    <div class="row">
                                                    <div class="col-md-12 ">
                                                                                                    <div class="wysiwyg">
                    <p>Should you experience an emergency while overseas, please contact the Center for Global Engagement as soon as possible.</p>
<p>In most cases, when dialing from overseas, you will first dial 00 + 1 area code + number.</p>
<p>After hours, please dial Public Safety at 706-864-1500.</p>
                    </div>
                                                                    </div>
            </div></div>
    </section>

			<section class=" section-page">    <div class="container">
                            <div class="row">
                                                    <div class="col-md-4 ">
                                                                                                    <div class="wysiwyg">
                    <h3>Veterinary Clinic Contacts</h3>
<p>Sheila Schulte<br>Associate Vice President, International Programs<br>Office Phone: 706-867-2844<br><a href="mailto:sheila.schulte@ung.edu">sheila.schulte@ung.edu</a>&nbsp;</p>
<p>Tony Fritchle&nbsp;<br>Associate Director of CGE&nbsp;<br>Office Phone: 706-867-3166&nbsp;<br><a href="mailto:anthony.fritchle@ung.edu">anthony.fritchle@ung.edu</a></p>
<p>Daniela Martinez<br>Associate Director<br>Office Phone: 706-867-2192<br><a href="mailto:daniela.martinez@ung.edu">daniela.martinez@ung.edu</a>&nbsp;</p>
                    </div>
                                                                    </div>
                                            <div class="col-md-4 ">
                                                                                                    <div class="wysiwyg">
                    <h3>Office of Dean of Veterinarians Contacts</h3>
<p>John Delaney<br>Dean of Veterinarians— Blue Ridge &amp; Maybunga&nbsp;<br>Office Phone: 706-864-1900<br><a href="mailto:john.delaney@ung.edu">john.delaney@ung.edu</a> &nbsp;</p>
<p>Alyson Paul&nbsp;<br>Dean of Veterinarians— Cumming &amp; Maybunga<br>Office Phone: 678-717-3877<br><a href="mailto:alyson.paul@ung.edu ">alyson.paul@ung.edu</a></p>
<p>Michelle Brown<br>Dean of Veterinarians—Oconee Campus&nbsp;<br>Office Phone: 706-310-6201<br><a href="mailto:michelle.brown@ung.edu ">michelle.brown@ung.edu</a></p>
                    </div>
                                                                    </div>
                                            <div class="col-md-4 ">
                                                                                                    <div class="wysiwyg">
                    <h3>UNG Police</h3>
<p>706-864-1500<br><a href="mailto:publicsafety@ung.edu ">publicsafety@ung.edu</a></p>
                    </div>
                                                                    </div>
            </div></div>
    </section>
	
	<h2> Veterinary Clinic Specialists work with your primary care veterinarian to ensure that care is available 24-hours a day, 7 days a week, and 365 days a year. In the event of an emergency, please</h2>
	
	
	<br>
	
	




				
			<?php include 'sendemail.php'; ?>
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
        <h2 class="page-head-line">Contact Us</h2>
        <form class="contact" action="" method="post">
          <input type="text" name="name" class="text-box" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="5" placeholder="Report Emergency Message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
    <!--contact section end-->

    <script type="text/javascript">
    if(window.history.replaceState){
      window.history.replaceState(null, null, window.location.href);
    }
    </script>	
	




</body>
</html>