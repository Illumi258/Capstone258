<!DOCTYPE html>
<html lang="en">
<style>
body {
  font-family: "Open Sans", sans-serif;
  background: #fafafa;
  padding: 0;
  margin: 0;
}

/* ---------------------------------------------------
    SIDEBAR STYLE
----------------------------------------------------- */
.wrapper {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  width: 100%;
  -webkit-box-align: stretch;
      -ms-flex-align: stretch;
          align-items: stretch;
}

#sidebar {
  min-width: 320px;
  max-width: 320px;
  min-height: 100vh;
  background: #173f5f;
  color: #fff;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}

#sidebar .sidebar-header {
  padding: 15px 10px;
  background: #12314a;
}

#sidebar.active {
  margin-left: -320px;
}

.btn {
  font-weight: 500 !important;
}



.card-body {
  color: #363636;
}

/* ---------------------------------------------------
    MEDIAQUERIES
----------------------------------------------------- */
@media (max-width: 768px) {
  #sidebar {
    margin-left: -320px;
  }
  #sidebar.active {
    margin-left: 0;
  }
  #sidebarCollapse span {
    display: none;
  }

  .container {
    margin-top: 0px !important;
  }

}

</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">


    <title>Sidebar Navigation</title>
</head>

<body>

    <body data-gr-c-s-loaded="true" cz-shortcut-listen="true">
        <div class="wrapper">
            <!-- Sidebar  -->
            <nav id="sidebar">

                <div class="sidebar-header text-center">
                    <h3 class="display-4">Title</h3>
                </div>
                <div class="container p-3">



                </div>
            </nav>

            <!-- Page Content  -->
            <div id="content" class="w-100 px-5 py-2">
                <div class="row p-3 d-flex justify-content-between">
                    <button type="button" id="sidebarCollapse" class="btn btn-outline-secondary">Hide Showbar</button>

                </div>


            </div>
        </div>

        <!-- jQuery CDN - Slim version (=without AJAX) -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
        <!-- Popper.JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
            integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
            crossorigin="anonymous"></script>
        <!-- Bootstrap JS -->
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
            integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
            crossorigin="anonymous"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#sidebarCollapse').on('click', function () {
                    $('#sidebar').toggleClass('active');
                     $(this).text($(this).text() == "Show Sidebar" ? "Hide Sidebar" : "Show Sidebar");

                });
                if ($('#sidebar').css('margin-left') == '-320px') {
                    console.log('IT is');

                     $(this).text($(this).text() == "Show Sidebar" ? "Hide Sidebar" : "Show Sidebar");

                }
            });
        </script>
    </body>