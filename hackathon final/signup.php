<?php



$conn=mysqli_connect("localhost","root","","hackathon");



if(isset($_GET['fname'])&&isset($_GET['lname'])&&isset($_GET['password'])
&&isset($_GET['email'])&&isset($_GET['phone']))
{

if(!empty($_GET['fname'])&&!empty($_GET['lname'])&&!empty($_GET['password'])&&
!empty($_GET['email'])&&!empty($_GET['phone']))

$fname=$_GET['fname'];
$lname=$_GET['lname'];
$pass=$_GET["password"];
$email=$_GET['email'];
$phone=$http_response_header['phone'];

$insert_q=mysqli_query($conn,"INSERT INTO `signup`(`id`, `firstname`, `lastname`, `password`, `email`, `phone`) 
VALUES (NULL,'$fname','$lname','$pass','$email','$phone')");
if($insert_q){
    echo'
    <script>alert("succsess");</script>';
}
else{
    echo'a7a';
}


}
