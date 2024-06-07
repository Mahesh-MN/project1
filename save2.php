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
$date=$_POST['date'];
$sql="INSERT INTO `table`(`name`, `email`, `phone`, `date`) VALUES ('$name','$email','$phone','$date')";
$result=mysqli_query($conn , $sql);
if($result)
{
    header( "Location:sub2.html" );
}
else{
    echo "error";
}
?>

