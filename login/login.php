<?php
include("connection.php");
$missingEmail = '<p><strong>Please enter your email address!</strong></p>';
$missingPassword = '<p><strong>Please enter a Password!</strong></p>';
if(empty($_POST['email']))
{
  $error .=$missingEmail;
}else{
  $email=filter_var($_POST["email"], FILTER_VALIDATE_EMAIL); 
}
if(empty($_POST['password']))
{
  $error .=$missingPassword;
}else{
  $password=filter_var($_POST["password"],FILTER_SANITIZE_STRING);
}
$query="SELECT * FROM login where `email`=='$email' AND `password`=='$password' ";
if($result=mysqli_query($link,$query))
{
  $results=mysqli_num_rows($result);
  if($results>0)
  {
    echo "<div class='succes alert alert-succesful'> You are succesfully logged in</div>";
    header("location:welcome.php");
  }
}
?>