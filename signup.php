<?php

$conn=mysqli_connect('localhost','root','imcool','user');
if(!$conn)
{
echo "connection failure";
}

else
{
	if(	isset($_POST['sub']))
	{
		
	$a=$_POST['t1'];	
	$b=$_POST['t2'];
	$c=$_POST['t3'];
	$d=$_POST['t4'];
	$e=$_POST['t5'];
	$f=$_POST['t6'];
	$g=$_POST['t8'];
	$h=$_POST['t7'];
  
       
  
	$row=mysqli_query($conn, "insert into websiteusers(username,password,repeat_password,email_id,address,aadhar_no,question,answer) values('$a','$b','$c','$d','$e','$f','$g','$h')");

	if($row)
	{
   echo "SIGNUP SUCCESSFULL";
   echo "to login again click<a href='login.htm'>log in</a>";
}
else
		{
echo "sign up unsuccessfull";
}
		
		
		
		}
	
}

?>
