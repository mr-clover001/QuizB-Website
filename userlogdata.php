<?php

session_start();

$server = "sql302.epizy.com" ;
$username = "epiz_31639098";
$password= "HeRVvOCIv2L1JKc";
$dbname = "epiz_31639098_userlogdata";

$con = mysqli_connect($server ,$username, $password, $dbname);

// $con = mysqli_connect('localhost','root');

// if($con){
//     echo "CONNECTION SUCCESSFULLY";
// }else{
//     echo "NO CONNECTION";
// }

mysqli_select_db($con, 'userlogdata');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];


$sql = "select * from userinfodata where email='$email' ";
$result = mysqli_query($con ,$sql);
$present=mysqli_num_rows($result);
if($present>0){
    $_SESSION['email_alert']='1';
     header("location:createAccount.php");

}else{

$query = " insert into userinfodata (fname, lname, email, password) 
values ('$firstname','$lastname','$email','$password')";

header("refresh: 0; url = http://playquizwithme.epizy.com");
//  echo "$query";
mysqli_query($con , $query);
exit;

}

?>