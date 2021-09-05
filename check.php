<?php
session_start();

$conn=mysqli_connect('localhost','root','hargun','school');

	
$user=mysqli_real_escape_string($conn,$_POST['t1']);
$pass=mysqli_real_escape_string($conn,$_POST['t2']);
echo $user;
echo $pass;
 
$rows=mysqli_query($conn,"select * from logindetails where username='$user' and password='$pass'");

$count=mysqli_num_rows($rows);
echo $count;
if($count==1)
{
$_SESSION['visitor']=$user;
header("location: home.php");
}
else
{
echo "invalid username/password";

}





?>