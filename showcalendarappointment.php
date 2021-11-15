        <title>Appointment Calendar  </title>

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




      .toolbar {
          margin-bottom: 10px;
      }

      .toolbar-item a {
          background-color: #fff;
          border: 1px solid #c0c0c0;
          color: #333;
          padding: 8px 0px;
          width: 80px;
          border-radius: 2px;
          cursor: pointer;
          display: inline-block;
          text-align: center;
          text-decoration: none;
      }

      .toolbar-item a.selected-button {
          background-color: #f3f3f3;
          color: #000;
      }

      /* context menu icons */
      .icon:before {
          position: absolute;
          margin-left: 0px;
          margin-top: 3px;
          width: 14px;
          height: 14px;
          content: '';
      }

      .icon-blue:before { background-color: #3d85c6; }
      .icon-green:before { background-color: #6aa84f; }
      .icon-orange:before { background-color: #e69138; }
      .icon-red:before { background-color: #cc4125; }

      /* active areas */
      .area-menu-icon {
          background-color: #333333;
          box-sizing: border-box;
          xborder: 1px solid white;
          border-radius: 10px;
          opacity: 0.7;
          color: white;
          display: flex;
          justify-content: center;
          xalign-items: center;
          font-size: 14px;
      }
/*      .area-menu-icon:hover {
          opacity: 1;
      }*/


span.container{
position:relative;
left: 200px;
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

</style>
	   <!-- DayPilot library -->
  <script src="js/daypilot-all.min.js"></script>

    
    
    <!-- core CSS -->

  

            <!-- Navigation -->
                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Top Menu Items -->

			<Body>   
<header>  
<nav>  
<ul>  
					<li ><a href="ulogin.php"><img src="images/l.png" width="65px" height="65px">
					&nbsp;<strong>Welcome, <?php session_start(); echo $_SESSION['user'];?></a></li> 
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

<center>
<h1>Appointment Calendar Available Schedule</h1>
</center>


	<div class="container1">
	<span class="container">
	<form action="ulogin.php" method="post">
  <div style="display:flex">
 
      <div id="nav">
	  </div>
    <div style="flex-grow: 0.80; margin-left: 10px;">
      <div class="toolbar buttons">
        <span class="toolbar-item"><a id="buttonDay" href="#">Day</a></span>
        <span class="toolbar-item"><a id="buttonWeek" href="#">Week</a></span>
        <span class="toolbar-item"><a id="buttonMonth" href="#">Month</a></span>
      </div>
      <div id="dpDay"></div>
      <div id="dpWeek"></div>
      <div id="dpMonth"></div>
    </div>
  </div>
</div>

<script type="text/javascript">


  var nav = new DayPilot.Navigator("nav");
  nav.showMonths = 3;
  nav.skipMonths = 3;
  nav.init();

  var day = new DayPilot.Calendar("dpDay");
  day.viewType = "Day";
  configureCalendar(day);
  day.init();

  var week = new DayPilot.Calendar("dpWeek");
  week.viewType = "Week";
  configureCalendar(week);
  week.init();

  var month = new DayPilot.Month("dpMonth");
  configureCalendar(month);
  month.init();

  function configureCalendar(dp) {
    dp.contextMenu = new DayPilot.Menu({
      items: [
        {
          text: "Delete",
          onClick: function(args) {
            var params = {
              id: args.source.id(),
            };
            DayPilot.Http.ajax({
              url: "calendar_delete.php",
              data: params,
              success: function(ajax) {
                dp.events.remove(params.id);
                dp.message("Deleted");
              }
            });
          }
        },
        {
          text: "-"
        },
        {
          text: "Blue",
          icon: "icon icon-blue",
          color: "#3d85c6",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        },
        {
          text: "Green",
          icon: "icon icon-green",
          color: "#6aa84f",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        },
        {
          text: "Orange",
          icon: "icon icon-orange",
          color: "#e69138",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        },
        {
          text: "Red",
          icon: "icon icon-red",
          color: "#cc4125",
          onClick: function(args) { updateColor(args.source, args.item.color); }
        }
      ]
    });


    dp.onBeforeEventRender = function(args) {
      if (!args.data.backColor) {
        args.data.backColor = "#6aa84f";
      }
      args.data.borderColor = "darker";
      args.data.fontColor = "#fff";
      args.data.barHidden = true;

      args.data.areas = [
        {
          right: 2,
          top: 2,
          width: 20,
          height: 20,
          html: "&equiv;",
          action: "ContextMenu",
          cssClass: "area-menu-icon",
          visibility: "Hover"
        }
      ];
    };

    dp.onEventMoved = function (args) {
      DayPilot.Http.ajax({
        url: "calendar_move.php",
        data: {
          id: args.e.id(),
          newStart: args.newStart,
          newEnd: args.newEnd
        },
        success: function() {
          console.log("Moved.");
        }
      });
    };

    dp.onEventResized = function (args) {
      DayPilot.Http.ajax({
        url: "calendar_move.php",
        data: {
          id: args.e.id(),
          newStart: args.newStart,
          newEnd: args.newEnd
        },
        success: function() {
          console.log("Resized.");
        }
      });

    };

    // event creating
    dp.onTimeRangeSelected = function (args) {

      var form = [
        {name: "Name", id: "text"},
        {name: "Start", id: "start", dateFormat: "MMMM d, yyyy h:mm tt", disabled: true},
        {name: "End", id: "end", dateFormat: "MMMM d, yyyy h:mm tt", disabled: true},
      ];

      var data = {
        start: args.start,
        end: args.end,
        text: "Appointment : Name"
      };

      DayPilot.Modal.form(form, data).then(function(modal) {
        dp.clearSelection();

        if (modal.canceled) {
          return;
        }

        DayPilot.Http.ajax({
          url: "calendar_create.php",
          data: modal.result,
          success: function(ajax) {
            var dp = switcher.active.control;
            dp.events.add({
              start: data.start,
              end: data.end,
              id: ajax.data.id,
              text: data.text
            });
          }
        });

      });
    };

    dp.onEventClick = function(args) {
      DayPilot.Modal.alert(args.e.data.text);
    };
  }

  var switcher = new DayPilot.Switcher({
    triggers: [
      {id: "buttonDay", view: day },
      {id: "buttonWeek", view: week},
      {id: "buttonMonth", view: month}
    ],
    navigator: nav,
    selectedClass: "selected-button",
    onChanged: function(args) {
      console.log("onChanged fired");
      switcher.events.load("calendar_events.php");
    }
  });

  switcher.select("buttonWeek");

  function updateColor(e, color) {
    var params = {
      id: e.data.id,
      color: color
    };
    DayPilot.Http.ajax({
      url: "calendar_color.php",
      data: params,
      success: function(ajax) {
        var dp = switcher.active.control;
        e.data.backColor = color;
        dp.events.update(e);
        dp.message("Color updated");
      }
    });
  }


</script>

</form>
	 


<br><br><br>
<!--*************************************************** FOOTERS **********************************************-->
  


    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>
    <script src="js/main.js"></script>
    <script src="js/wow.min.js"></script>







</body>
</html>