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
	   
	   $a=$_POST['t2'];
	
     		$b=$_SESSION['visitor'];


$rows=mysqli_query($conn,"update websiteusers set password='$a' where dfg='$b' ");


if($rows)
{
echo "password reset successful";
}
else
{
  echo "invalid credentials";
}


	  }

}
?>