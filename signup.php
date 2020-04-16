<?php
  $host="localhost:3307";
  $user="root"; //user of database = root
  $pass="myPass";//password
  $db="JRSU";//database name where all records wil be inserted
  $conn = mysqli_connect($host,$user,$pass,$db);//$conn variable where all details of connection are stored
  
  //find error during connection
  /*if(!$conn)
  {
	  echo "connection failed".mysqli_connect_error();
  }*/
//include("mySqlConnection.php"); //To connect with database
?>

<html>
 <head>
  <title>Signup Form</title>
   <table align="center">
    <form action="" method="post">
     <tr>
	  <td> 
	    User ID<td><input type="number" name="u_id">
	  </td>
	 </tr>
     <tr> 
	  <td>
	    User Name<td><input type="text" name="u_name">
	  </td>
	 </tr>
     <tr>
	  <td>
	    E-mail<td><input type="text" name="email">
	  </td>
	 </tr>
     <tr>
	  <td>
	    Password<td><input type="password" name="pwd">
	  </td>
	 </tr>
     <tr>
	  <td>
	    Conform Password<td><input type="password" name="cpwd">
	  </td>
	 </tr>
     <tr>
	  <td>
	    Phone No.<td><input type="number" name="phone">
	  </td>
	 </tr>
     <tr>
	  <td>
	    <input type="submit" id="button" name="submit" value="Register">
	  </a>
	 </tr>
	 <tr>
	  <td>
	    <input type="submit" id="button1" name="login" value="Login">
	  </a>
	 </tr>
    </form>
 </head>
</html>

<?php

//Register form for new User
if(isset($_POST['submit']))
{
  $id=$_POST['u_id']; //id=user ID
  $uname=$_POST['u_name'];  //Uname=User Name
  $email=$_POST['email'];  //E-mail
  $pwd=$_POST['pwd'];  //pwd=Password
  $cPwd=$_POST['cpwd'];  //cPwd=conform Password
  $phone=$_POST['phone'];  //phone = User phone Number 
  
//Register Query
  $sql="INSERT INTO REGISTER VALUES('$id','$uname','$email','$pwd','$cPwd','$phone')";
  $qry1=mysqli_query($conn,$sql);
  
//If statement to check query is executed or not
  
  if($qry1)
  {
	  echo "Successfully Registered :)";
  }
  else
  {
	  echo "Something Error :(";
  }
}
if(isset($_POST['login']))
{
	header('location:login.php');
}
?>