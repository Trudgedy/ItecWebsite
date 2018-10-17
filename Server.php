<?php
session_start();

// initializing variables
$Name = "";
$email    = "";
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'itecprojectdb');

// REGISTER USER
if (isset($_POST['reg_user'])) {
  // receive all input values from the form
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password = mysqli_real_escape_string($db, $_POST['password']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Name)) { array_push($errors, "Name is required"); }
  if (empty($email)) { array_push($errors, "Email is required"); }
  if (empty($password)) { array_push($errors, "Password is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same Name and/or email
  $user_check_query = "SELECT * FROM users WHERE Name='$Name' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Name'] === $Name) {
      array_push($errors, "Name already exists");
    }

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	$password = md5($password);//encrypt the password before saving in the database
	$date = date("Y/m/d");
  	$query = "INSERT INTO person (Name, email, password, CreatedOn, UpdatedOn) 
  			  VALUES('$Name', '$email', '$password', '$date', '$date')";
  	mysqli_query($db, $query);
  	$_SESSION['Name'] = $Name;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: events.php');
  }
}


// LOGIN USER
if (isset($_POST['login_user'])) {
  $Name = mysqli_real_escape_string($db, $_POST['Name']);
  $password = mysqli_real_escape_string($db, $_POST['password']);

  if (empty($Name)) {
  	array_push($errors, "Name is required");
  }
  if (empty($password)) {
  	array_push($errors, "Password is required");
  }

  if (count($errors) == 0) {
  	$password = md5($password);
  	$query = "SELECT * FROM person WHERE Name = '$Name' AND password='$password' LIMIT 1";
  	$results = mysqli_query($db, $query);
	$user = mysqli_fetch_assoc($results);
	
	
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['Name'] = $Name;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: events.php');
  	}else {
  		array_push($errors, "Wrong Name/password combination");
  	}
  }
}

//Create an events
if (isset($_POST['Create_Event'])) {
  // receive all input values from the form
  $EventName = mysqli_real_escape_string($db, $_POST['Name']);
  $startDate = mysqli_real_escape_string($db, $_POST['startDate']);
  $endDate = mysqli_real_escape_string($db, $_POST['endDate']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($EventName)) { array_push($errors, "Name is required"); }
  if (empty($startDate)) { array_push($errors, "Start Date is required"); }
  if (empty($endDate)) { array_push($errors, "End Date is required"); }
  

  // first check the database to make sure 
  // a user does not already exist with the same Name and/or email
  $event_check_query = "SELECT * FROM event WHERE EventName='$EventName' LIMIT 1";
  $result = mysqli_query($db, $event_check_query);
  $event = mysqli_fetch_assoc($result);
  
  $loggedInUser = $_SESSION['Name'];
  
  $person_query = "SELECT PersonId FROM person WHERE Name='$loggedInUser' LIMIT 1";
  $result = mysqli_query($db, $person_query);
  $LoggedInUserId = mysqli_fetch_assoc($result);
  $Id = $LoggedInUserId['PersonId'];
  
  if ($event) { // if user exists
    if ($event['EventName'] === $EventName) {
		array_push($errors, "Name already exists");
      
    }
  }
  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
	$date = date("Y/m/d");
  	$query = "INSERT INTO event (EventName, StartDate, EndDate, CreatedOn, UpdatedOn, PersonId) 
  			  VALUES('$EventName', '$startDate', '$endDate', '$date', '$date', '$Id')";
  	mysqli_query($db, $query);
  	header('location: events.php');
  }
}


?>