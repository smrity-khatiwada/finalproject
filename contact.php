<?php
"$host"="localhost";
"$user"="root";
"$password"="";
"$db"="testdb";

$db=new mysqli("localhost",$user,$pass,$db) or die("unable to connect");

if($-SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];


 if(empty$_POST["name"])){
        $echo="Name is required";
    }
  else{
  $name=test_input($_POST["name"]);
  }
  if(empty $_POST["email"])){
      $echo="email is required";
  }
  else{
      $email=test_input($_POST["email"]);
  }
  if(empty $_POST["phone"])){
      $echo="phone is required";
  }
  else{
      $phone=test_input($_POST["phone"]);
  }
    
 echo="okay";
}
?>










