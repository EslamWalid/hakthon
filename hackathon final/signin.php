<?php

require 'signup.php';


if(isset($_GET['username'])&&isset($_GET['userpass']))
{

if(!empty($_GET['username'])&&!empty($_GET['userpass']))

{

    echo'ok1';

$data=mysqli_query($conn,"SELECT `firstname` FROM `signup` WHERE `fname`=$_GET['username']");

if(mysqli_num_rows($data) > 0)
{

$pass=mysqli_query($conn,"SELECT `password`FROM `signup` WHERE `fname`=$_GET['username']");

if($_GET['userpass']==$pass)
{

    echo'welcome';

}

}



}
}