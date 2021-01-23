<?php

$conn=mysqli_connect('localhost','root','','resumedb');
if (!$conn) 
{
 die("Connection failed:".mysqli_error($conn));
}

$id = $_POST["id"];
$name = $_POST["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/'; 
if (preg_match($regex, $email))
 {
 $objective = $_POST["objective"];
$password=$_POST["password"];

$Education1 = $_POST["Education1"];
$Education2 = $_POST["Education2"];
$Education3 =$_POST["Education3"];

$skill1 = $_POST["skill1"];
$skill2 = $_POST["skill2"];
$skill3 = $_POST["skill3"];
$skill4 = $_POST["skill4"];


$project1 = $_POST["project1"];
$project2 = $_POST["project2"];
$project3 = $_POST["project3"];

$github = $_POST["github"];
$linkedin = $_POST["linkedin"];

$sql = "INSERT INTO personal(name,address,phone,email,objective,password,id) VALUES('$name','$address','$phone','$email','$objective','$password','$id')";

$sql1 = "INSERT INTO education(Education1,Education2,Education3) VALUES('$Education1','$Education2','$Education3')";

$sql2 = "INSERT INTO skills(skill1,skill2,skill3,skill4) VALUES('$skill1','$skill2','$skill3','$skill4')";

$sql3 = "INSERT INTO projects(project1,project2,project3) VALUES('$project1','$project2','$project3')";

$sql4 = "INSERT INTO llink(github,linkedin) VALUES('$github','$linkedin')";

mysqli_query($conn,$sql);
mysqli_query($conn,$sql1);
mysqli_query($conn,$sql2);
mysqli_query($conn,$sql3);
mysqli_query($conn,$sql4);

header('Location:user-login.php');

} else { 
 echo $email . " is an invalid email. Please try again.";
}   
?>