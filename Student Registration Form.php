<?php
include("connection.php");
error_reporting(0);
?>



<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" type="image/jpg"
  href="./assets/images/Title-logo.jpg"
  sizes="64x64"/>
  <title>Coursera - Student Registration Form.</title>
  <link rel="stylesheet" href="./assets/css/style1.css">
  <form>
    <nav class="navbar">
      <div class="navbar-brand">
        <img src="./assets/images/logo.jpg" alt="Educator Logo">
        <p> Register Here!</p>
      </div>
      <ul class="navbar-nav">
        <li class="nav-item">
          <p> Register </p>
        </li>
      </ul>
    </nav>
    <div class="container">
      <p>Please fill in this form to create an account.</p>
      <hr>

      <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="name" id="name" required>
  
      <label for="number"><b>Contact No.</b></label>
      <input type="text" maxlength="10" placeholder="Enter Contact No." name="contactno" id="number" required>
  
      <label for="email"><b>Email ID</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="emailid" required>
  
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" id="psw" required>
  
      <label for="psw-repeat"><b>Confirm Password</b></label>
      <input type="password" placeholder="Confirm Password" name="confirmpassword" id="psw-repeat" required>
      <hr>

      <button type="submit" class="registerbtn" name="submit">Register</button>
      <p>By creating an account you agree to our <a href="T&C.html">Terms & Privacy</a>.</p>
    </div>
  
    
  </form>
</head>
</html>

<?php

$nm=$_GET['name'];
$cn=$_GET['contactno'];
$ei=$_GET['email'];
$psw=$_GET['password'];
$conpsw=$_GET['confirmpassword'];

$query="INSERT INTO STUDENT VALUES ('$nm','$cn','$ei','$psw','$conpsw')";
$data=mysqli_query($conn,$query);

if($data)
{
    echo "Registration Completed.";
}
else
{
    echo "Registration Failed!";
}
?>