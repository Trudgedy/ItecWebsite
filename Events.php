<!DOCTYPE html>

<html style="" class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index - Warp Training</title>
    <link href="./Events - index_files/bootstrap.css" rel="stylesheet">
<link href="./Events - index_files/site.css" rel="stylesheet">
<link href="./Events - index_files/bootstrap-chosen.css" rel="stylesheet">
<link href="./Events - index_files/jquery.dataTables.css" rel="stylesheet">

    <script src="./Events - index_files/modernizr-2.6.2.js.download"></script>

    <script src="./Events - index_files/jquery-1.10.2.js.download"></script>
<script src="./Events - index_files/chosen.jquery.js.download"></script>
<script src="./Events - index_files/jquery.dataTables.js.download"></script>


</head>

<?php
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
                    <li><a href="Register.php">People</a></li>
                    <li><a href="Events.php">Events</a></li>
                    
                </ul>
                
    <ul class="nav navbar-nav navbar-right">
        <li><a href="Register.php" id="registerLink">Register</a></li>
        <li><a href="Login.php" id="loginLink">Log in</a></li>
    </ul>

            </div>
        </div>
    </div>
    <div class="container body-content">


<h2>Index</h2>


<table class="table">
    <tbody><tr>
        <th>
            Name
        </th>
        <th>
            PersonName
        </th>
        <th></th>
    </tr>

	

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "ItechProjectDb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT Name, PersonName, CreatedOn FROM Events, People"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
	

</tbody></table>
?> 
  
    </div>

    
    <script src="./Events - index_files/bootstrap.js.download"></script>
<script src="./Events - index_files/respond.js.download"></script>

    


</body></html>