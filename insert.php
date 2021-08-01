<?php


$user name = $_POST['user name'];
$first name = $_POST['first name'];
$last name = $_POST['last name'];
$phone number = $_POST['phone number'];
$emailid = $_POST['email id'];
$dob = $_POST['dob'];
$city = $_POST['city'];
$state = $_POST['state'];
$address = $_POST['address'];
$pincode = $_POST['pincode'];
$password = $_POST['password'];

$conn = new mysqli('localhost','root','','first');
if($conn->connect_error){
die('connection failed :', $conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into registration(user name,first name,last name,phone number,email id,dob,city,state,address,pincode,password)

values(?,?,?,?,?,?,?,?,?,?,?)");
$stmt->bind_param("ssssi",$user name,$first name,$last name,$phone number,$emailid,$dob,$city,$state,$address,$pincode,$password);
$stmp->execute();
echo "registration successfully";
$stmt->close();
$conn->close();
}




if(!empty($uesrname) || !empty($firstname) ||!empty($lastname) ||!empty($phonenumber) ||!empty($emailid) 
||!empty($dob) ||!empty($city) ||!empty($state) ||!empty($address) ||!empty($pincode) ||!empty($password)) {


$servername =" localhost";
$username ="root";
$password ="";
$dbnamename ="";
?>