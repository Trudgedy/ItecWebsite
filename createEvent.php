<!DOCTYPE html>
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create - Warp Training</title>
    <link href="./People - Create_files/bootstrap.css" rel="stylesheet">
<link href="./People - Create_files/site.css" rel="stylesheet">
<link href="./People - Create_files/bootstrap-chosen.css" rel="stylesheet">
<link href="./People - Create_files/jquery.dataTables.css" rel="stylesheet">

    <script src="./People - Create_files/modernizr-2.6.2.js.download"></script>

    <script src="./People - Create_files/jquery-1.10.2.js.download"></script>
<script src="./People - Create_files/chosen.jquery.js.download"></script>
<script src="./People - Create_files/jquery.dataTables.js.download"></script>


</head>
<body style="">
    
     <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="events.php">Event Holders Inc</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="events.php">Events</a></li>
                    
                </ul>
                
    <?php
include 'Server.php';
	
   if ($_SESSION['Name'] == ""){
	   
	   echo ' <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php" id="registerLink">Register</a></li>
        <li><a href="login.php" id="loginLink">Log in</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
';
	   
   }else {
	   
	   echo ' <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php" id="registerLink">Register</a></li>
        <li><a> Welcome '.$_SESSION['Name'].' </a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
';
	   
	   
   }


?>

<h2>Create</h2>


<form action="createEvent.php" method="post" novalidate="novalidate">
<?php include('errors.php'); ?>
  <div class="form-horizontal">
        <h4>Event</h4>
        <hr>
        
        <div class="form-group">
            <label class="control-label col-md-2" for="Name">Name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="Name" name="Name" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="startDate">Start Date</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val-required="This field is required!" id="startDate" name="startDate" type="date" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="startDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="endDate">End Date</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val-required="This field is required!" id="endDate" name="endDate" type="date" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="endDate" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" name="Create_Event" value="Create" class="btn btn-default">Create</button>
            </div>
        </div>
    </div>
		
</form>

    </div>

    
    <script src="./People - Create_files/bootstrap.js.download"></script>
<script src="./People - Create_files/respond.js.download"></script>

    
    <script src="./People - Create_files/jquery.validate.js.download"></script>
<script src="./People - Create_files/jquery.validate.unobtrusive.js.download"></script>




</body></html>