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
                <a class="navbar-brand" href="http://localhost:61828/Home">Application name</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a href="http://localhost:61828/Home">Home</a></li>
                    <li><a href="http://localhost:61828/People">People</a></li>
                    <li><a href="http://localhost:61828/Events">Events</a></li>
                    
                </ul>
                
    <ul class="nav navbar-nav navbar-right">
        <li><a href="http://localhost:61828/Account/Register" id="registerLink">Register</a></li>
        <li><a href="http://localhost:61828/Account/Login" id="loginLink">Log in</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
        
<?php
include('Server.php'); // Includes Login Script

?>

<h2>Create</h2>


<form action="Register.php" method="post" novalidate="novalidate">
<?php include('errors.php'); ?>
  <div class="form-horizontal">
        <h4>Person</h4>
        <hr>
        
        <div class="form-group">
            <label class="control-label col-md-2" for="Name">Name</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="Name" name="Name" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="email">Email</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val-required="The Email field is required." id="email" name="email" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="CreatedOn" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="password">Password</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" data-val-required="The Password field is required." id="password" name="password" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="password" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <button type="submit" name="reg_user" value="Register" class="btn btn-default">Register</button>
            </div>
        </div>
    </div>
		<p>
  		Already a member? <a href="Login.php">Sign in</a>
  	</p>
</form>

    </div>

    
    <script src="./People - Create_files/bootstrap.js.download"></script>
<script src="./People - Create_files/respond.js.download"></script>

    
    <script src="./People - Create_files/jquery.validate.js.download"></script>
<script src="./People - Create_files/jquery.validate.unobtrusive.js.download"></script>




</body></html>