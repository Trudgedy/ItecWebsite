<!DOCTYPE html>
<!-- saved from url=(0036)http://localhost:61828/Account/Login -->
<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="./Person - Login_files/bootstrap.css" rel="stylesheet">
<link href="./Person - Login_files/site.css" rel="stylesheet">
<link href="./Person - Login_files/bootstrap-chosen.css" rel="stylesheet">
<link href="./Person - Login_files/jquery.dataTables.css" rel="stylesheet">

    <script src="./Person - Login_files/modernizr-2.6.2.js.download"></script>

    <script src="./Person - Login_files/jquery-1.10.2.js.download"></script>
<script src="./Person - Login_files/chosen.jquery.js.download"></script>
<script src="./Person - Login_files/jquery.dataTables.js.download"></script>

<?php
include('Server.php'); // Includes Login Script

?>

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
                
    <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php" id="registerLink">Register</a></li>
        <li><a href="login.php" id="loginLink">Log in</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">
        


<h2>Login</h2>

<form action="Login.php" method="post">
<?php include('errors.php'); ?>
   <div class="form-horizontal">
        <h4>Person</h4>
        <hr>
        <div class="form-group">
            <label class="control-label col-md-2" for="Name">Username</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" placeholder="Name" id="Name" name="Name" type="text" value="">
                <span class="field-validation-valid text-danger" data-valmsg-for="Email" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <label class="control-label col-md-2" for="Password">Password</label>
            <div class="col-md-10">
                <input class="form-control text-box single-line" id="password" placeholder="*********" name="password" type="password">
                <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-offset-2 col-md-10">
                <input type="submit" name="login_user" value="Login" class="btn btn-default">
            </div>
			
        </div>
    </div>
	<p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>
</form>




    
    <script src="./Person - Login_files/bootstrap.js.download"></script>
<script src="./Person - Login_files/respond.js.download"></script>

    


</body></html>