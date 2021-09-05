<?php
session_start();
$conn=mysqli_connect('localhost','root','imcool','user');
if(!$conn)
{
echo "connection failure";
}

else
{
	if($_SERVER['REQUEST_METHOD']=='POST')

	{
           
$user=mysqli_real_escape_string($conn,$_POST['t1']);
$pass=mysqli_real_escape_string($conn,$_POST['t2']);
 
$rows=mysqli_query($conn,"select * from websiteusers where username='$user' and password='$pass'");

$count=mysqli_num_rows($rows);

if($count==1)
{
if(isset($_POST['c1']))
{
setcookie("user",$user,time()+(86400*30));
setcookie("pass",$pass,time()+(86400*30));
}
else
{
setcookie("user",$user,time()-1);
setcookie("pass",$pass,time()-1);

}
$_SESSION['visitor']=strtoupper($user);
header("location: home.php");
}
else
{
	echo"error";
}


	}

}
?>