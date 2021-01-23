<html>
<?php

$id = $_POST["id"];
$name = $_POST["name"];
$address = $_POST["address"];
$phone = $_POST["phone"];
$email = $_POST["email"];
$objective = $_POST["objective"];

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

$conn=new mysqli("localhost","root","","resumedb");
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error());
}

$sql = "update personal,education,skills,projects,llink set name='$name',address='$address',phone='$phone',email=
'$email',objective='$objective',Education1='$Education1',Education2='$Education2',Education3='$Education3',skill1='$skill1',
		skill2='$skill2',skill3='$skill3',skill4='$skill4',project1='$project1',project2='$project2',project3='$project3',
		github='$github',linkedin='$linkedin'
		 where id='$id'";

if($conn->query($sql) ===TRUE)
{
	echo "Records Updated: ";
}	
else
{
	echo "Error: ".$sql."<br>".$conn->error;
}	 
$conn->close();

?>
   <p>
    <a href="view-resume.php">View Resume</a>
    </p>   
</html>