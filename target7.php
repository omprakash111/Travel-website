<?php

session_start();
$conn=mysqli_connect("localhost","root","imcool","user");
if(!$conn)
{
echo "connection failed";
}
else
{
     if($_SERVER['REQUEST_METHOD']=='POST')
	  {
	   $sqty = mysqli_real_escape_string($conn,$_POST['dd']);
	   $answer = mysqli_real_escape_string($conn,$_POST['t2']);
	   $alter = mysqli_real_escape_string($conn,$_POST['t3']);

$rows=mysqli_query($conn,"select * from websiteusers where question='$sqty' and answer='$answer' and aadhar_no='$alter'");

$form=mysqli_fetch_assoc($rows);


if($form)
{
  $_SESSION['visitor']=$form['dfg'];

  echo  $_SESSION['visitor'];
  
  header("location:confirm.php"); 
}
else
{
  echo "wrong.........";
}
	  }

}
?>