<?php
session_start();
$conn = mysqli_connect("localhost","root","","donor");
$ins = "INSERT INTO feedback (fullname,email,comments)";

if(isset($_POST['save']))
{
$f = $_POST['fullname'];
$m = $_POST['email'];
$g = $_POST['comments'];


 echo" <h1>we have received your opnion</h1> ";
   
    
}

?>
<html>
<head>
<title> message</title>
<style>
    h1{
        font-family:Blackadder ITC;
        font-size: 100px; color: lightgreen;
    }
</style>
</head>
<body bgcolor="black">


</body>
</html>