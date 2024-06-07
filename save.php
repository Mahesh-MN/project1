<?php
$servername="localhost";
$username="root";
$password="";
$dbname="mahesh";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo "not connected";
}
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$room=$_POST['room'];
$sql="INSERT INTO `room`(`name`, `email`, `phone`, `checkin`, `checkout`, `room`) VALUES ('$name','$email','$phone','$checkin','$checkout','$room')";
$result=mysqli_query($conn , $sql);
if($result)
{
    header( "Location:sub.html" );
}
else{
    echo "error";
}
?>

