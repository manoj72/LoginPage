<?php
include("connection.php");
$missingname = '<p><strong>Please enter a name!</strong></p>';
$missingUsername = '<p><strong>Please enter a username!</strong></p>';
$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$invalidEmail = '<p><strong>Please enter a valid email address!</strong></p>';
$missingGender = '<p><strong>Please chose your gender!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
$invalidPassword = '<p><strong>Your password should be at least 6 characters long and inlcude one capital letter and one number!</strong></p>';
$different = '<p><strong>Passwords don\'t match!</strong></p>';
$missingPassword2 = '<p><strong>Please confirm your password</strong></p>';
$error;
if(empty($_POST['name'])){
$error .= $missingname;
}
else{
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING); 
}
if(empty($_POST['username']))
{
  $error .= $missingUsername;
}
else{
  $username = filter_var($_POST["username"], FILTER_SANITIZE_STRING); 
}
if(empty($_POST['email']))
{
  $error .=$missingEmail;
}
else{
  $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); 
}
if(empty($_POST['gender']))
{
  $error .=$missingGender;
}
else{
  $gender = filter_var($_POST["gender"], FILTER_SANITIZE_STRING); 
}
if(empty($_POST['password']))
{
  $error .=$missingPassword;
}
elseif(!(strlen($_POST["password"])>6
         and preg_match('/[A-Z]/',$_POST["password"])
         and preg_match('/[0-9]/',$_POST["password"])
        )
       ){
    $errors .= $invalidPassword; 
}else{
    $password = filter_var($_POST["password"], FILTER_SANITIZE_STRING); 
}
    if($_POST['password'] !== $_POST['password2'])
    {
      $error .=$different;
    }
   


if($error)
{
  echo "<div class='alert alert-danger'> $error </div>" ;
  exit;
}

$query ="SELECT * FROM login WHERE `username`=='$username'";
$result=mysqli_query($link,$query);
if(!$result){
  echo "<div class='alert alert-danger'>'Problem to connect with database'</div>";
}
$results=mysqli_num_rows($result);
if($results>=1){
  echo "<div class='alert alert-danger'>'already username is exist'</div>";
}


$query ="SELECT * FROM login WHERE `email`=='$email'";
$result=mysqli_query($link,$query);
if(!$result){
  echo "<div class='alert alert-danger'>'Problem to connect with database'</div>";
}
$results=mysqli_num_rows($result);
if($results>=1){
  echo "<div class='alert alert-danger'>'already email_id is exist'</div>";
}
$query="INSERT INTO login (`name`,`username`,`gender`,`email`,`password`) VALUES ('$name','$username','$gender','$email','$password')";
if($result=mysqli_query($link,$query))
{
  foreach($_POST["language"] as $lang)
   {
  $query="INSERT INTO lang (`username`,`lang`)VALUES('$username','$lang')";
  if(!$result=mysqli_query($link,$query)){
    echo "<div class='alert alert-danger'>'data not added into database'</div>";
  }
  echo "<div class='alert'>'Succesfully registered'</div>";
}
}

?>