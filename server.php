<?php
session_start();

// initializing variables
$Citizen_id=NULL;
$password_1=NULL;
$password_2=NULL;
$username=NULL;
$dob=NULL; 
$parent=NULL;
$address=NULL;
$Qualification=NULL;
$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'Law');

// REGISTER USER
if (isset($_POST['reg_user'])) {



  // receive all input values from the form
  $Citizen_id= mysqli_real_escape_string($db, $_POST['Citizen_id']);
  $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
  $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $dob = mysqli_real_escape_string($db, $_POST['dob']);
  $parent = mysqli_real_escape_string($db, $_POST['parent']);
  $address = mysqli_real_escape_string($db, $_POST['address']);
  $Qualification = mysqli_real_escape_string($db, $_POST['Qualification']);


  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($Citizen_id)) { array_push($errors, "Citizen_id is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
   if (empty($username)) { array_push($errors, "Name is required"); }
   if (empty($dob)) { array_push($errors, "Date of Birth is required"); }
   if (empty($parent)) { array_push($errors, "Parent's name is required"); }
   if (empty($address)) { array_push($errors, "Address is required"); }
   if (empty($Qualification)) { array_push($errors, "Qualification is required"); }   
  

  $check = getimagesize($_FILES["image"]["tmp_name"]);
  if($check !== false){
        $image = $_FILES['image']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
      }
  else{
    array_push($errors, " File upload failed, please try again.");
   
  }
  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM Citizen WHERE Citizen_id='$Citizen_id' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['Citizen_id'] === $Citizen_id) {
      array_push($errors, "Citizen_id already exists");
    }

  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//encrypt the password before saving in the database

  	$query = "INSERT INTO Citizen(Citizen_id, Password,image) 
  			  VALUES('$Citizen_id', '$password_1','$imgContent')";
  	mysqli_query($db, $query);
  	$_SESSION['Citizen_id'] = $Citizen_id;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: Citizen/profile.html');
  }
}