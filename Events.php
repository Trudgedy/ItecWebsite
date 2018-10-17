<!DOCTYPE html>

<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Warp Training</title>
    <link href="./Events - index_files/bootstrap.css" rel="stylesheet">
<link href="./Events - index_files/site.css" rel="stylesheet">
<link href="./Events - index_files/bootstrap-chosen.css" rel="stylesheet">
<link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" rel="stylesheet">

    <script src="./Events - index_files/modernizr-2.6.2.js.download"></script>

    <script src="./Events - index_files/jquery-1.10.2.js.download"></script>
<script src="./Events - index_files/chosen.jquery.js.download"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>


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


echo '	
<h2>Index</h2>


<table class="table" id="datatable">
    <thead><tr>
        <th>
             Name
        </th>
        <th>
             Start date
        </th>
        <th>
			 End date
		</th>
		<th>
		Event Creator
		</th>
    </tr>
	</thead>
	<tbody>';

	

try {
    
	if ($_SESSION['Name'] == ""){
		
		//header("Location: login.php"); 
		exit();
		
	} else {
	
$db_host = 'localhost';
$db_user = 'root';
$db_pass = ''; 
$db_name = 'itecprojectdb';
   
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if (!$conn) {
    die ('Fail to connect to MySQL: ' . mysqli_connect_error());   
}

	$sql = 'SELECT EventName, StartDate, EndDate, Name 
        FROM event
		JOIN person ON event.PersonId = person.PersonId';
		
	$query = mysqli_query($conn, $sql);

		
	if (!$query) {
		die ('SQL Error: ' . mysqli_error($conn));
}
    while($row = mysqli_fetch_array($query)) { 
        echo '
		<tr>
			<td>
				'.$row['EventName'].'
			</td>
			<td>
				'.$row['StartDate'].'
			</td>
			<td>
				'.$row['EndDate'].'
			</td>
			<td>
				'.$row['Name'].'
			</td>
	</tr>
		';
    }
}
}
catch(PDOException $e) {
    echo "Error!";
}

echo '</tbody>
	</table>';

?> 
<?php include('errors.php'); ?>
  <input type="button" name="Create Event" value="Create" class="btn btn-default" onclick="location.href='createEvent.php'" >
  
    </div>

    
    <script src="./Events - index_files/bootstrap.js.download"></script>
<script src="./Events - index_files/respond.js.download"></script>

    <script>
	
	$(document).ready( function () {
		$('#datatable').DataTable();
	} );
	
	</script>


</body></html>