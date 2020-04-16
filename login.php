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
 //include("mySqlConnection.php")//alternative of above code if above code is in other file
?>

<form action="" method="post">
E-mail<input type="text" placeholder="E-mail" name="email"><br>
Password<input type="text" placeholder="Password" name="password"><br>
<input type="submit" id="button" name="login" value="Login">
<input type="submit" id="button1" name="register" value="Register">
</form>

<?php

/*if submit button is clicked after filling credentials
the user will logged in to their page*/

 if(isset($_POST['login']))
 {
	 $email=$_POST['email'];
	 $pwd1=$_POST['password'];
	 $query="SELECT * FROM register WHERE E_mail='$email' && Password='$pwd1'";//
	 $data=mysqli_query($conn,$query);
	 $total=mysqli_num_rows($data);
	 //echo $total;//
	 if($total==1)
	 {
		if ($email=='exam@gmail.com' && $pwd1=='123exam')
		{
			header('location:examination.php');
		    //echo "successfully login";
		}
		elseif($email=='welfare@gmail.com' && $pwd1=='123welfa')
		{
			header('location:st_welfare.php');
		}
		elseif($email=='Registrar@gmail.com' && $pwd1=='123regis')
		{
			header('location:registrar.php');
		}
		else
		{
			header('location:student.php');
		}
	 }
	 else
	 {
		 echo "<font color='red'>Filled login details are not available please register first:)</font>";
	 }
 }
 if(isset($_POST['register']))
 {
	 header('location:signup.php');
 }
?>
 