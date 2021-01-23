<?php
$id = 1;

$conn=new mysqli("localhost","root","","resumedb");
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error());
}

$sql = "select * from personal,education,skills,projects,llink where id='$id'";

$result = $conn->query($sql); //connects sql query and stored result in $result 

if($result->num_rows > 0)
{
	$row = $result->fetch_assoc(); 

	//pulling out data from $row array
	$name = $row["name"];
	$address = $row["address"];
	$phone = $row["phone"];
	$email = $row["email"];
	$objective = $row["objective"];

	$Education1 = $row["Education1"];
	$Education2 = $row["Education2"];
	$Education3 = $row["Education3"];

	$skill1 = $row["skill1"];
	$skill2 = $row["skill2"];
	$skill3 = $row["skill3"];
	$skill4 = $row["skill4"];

	$project1 = $row["project1"];
	$project2 = $row["project2"];
	$project3 = $row["project3"];

	$github = $row["github"];
	$linkedin = $row["linkedin"];

echo 

"<html>
<head>
<style>
form {
 margin: 0;
 margin-left: 300px;
 margin-right: 300px;
 padding: 2em 0;
 border: 2px double;
text-align: center;

}

label{
  width:240px;
  display: inline-block;
}

body
{
	background-image: url(images/intro-bg.jpg);
}

input{
	height: 37px;
	width: 35%;
	border-radius: 4px;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: center;
}

form{
background-color: #C0C0C0;
padding: 10px;
}

label{
	font-size: 20px;
	width: 210px; 

}
</style>
</head>
<body>

<form action ='UpdateFormScript.php' method='post'>
<center>
<label>User ID: $id &#9999;</label><br><br>
<input type ='hidden' name='id' value='$id'>
<label>PERSONAL DETAILS</label><br><br>
<label>Name:</label>
<input type='text' name='name' value='$name'><br><br>
<label>Address:</label>
<input type='text' name='address' value='$address'><br><br>
<label>Phone:</label>
<input type='text' name='phone' value='$phone'><br><br>
<label>Email:</label>
<input type='text' name='email' value='$email' ><br><br>
<label>Objective:</label> 
<input type='text' name='objective' value='$objective'><br><br>

<label>EDUCATION DETAILS</label><br><br>
<label>Education1:</label> 
<input type='text' name='Education1' value='$Education1'><br><br>
<label>Education2:</label> 
<input type='text' name='Education2' value='$Education2'><br><br>
<label>Education3:</label>
<input type='text' name='Education3' value='$Education3'><br><br>

<label>SKILLS & LANGUAGES</label><br><br>
<label>Language1:</label> 
<input type='text' name='skill1' value='$skill1'><br><br>
<label>Language2:</label> 
<input type='text' name='skill2' value='$skill2'><br><br>
<label>Language3:</label> 
<input type='text' name='skill3' value='$skill3'><br><br>
<label>Language4:</label> 
<input type='text' name='skill4' value='$skill4'><br><br>

<label>PROJECTS</label><br><br>
<label>Project1:</label> 
<input type='text' name='project1' value='$project1'><br><br>
<label>Project2:</label> 
<input type='text' name='project2' value='$project2'><br><br>
<label>Project3:</label> 
<input type='text' name='project3' value='$project3'><br><br>

<label>LINKS</label><br><br>
<label>Github:</label>
<input type='text' name='github' value='$github'><br><br>
<label>Linkedin:</label>
<input type='text' name='linkedin' value='$linkedin'><br><br>

<input type = 'submit'>
</center>
</form>
</body>
</html>";

}
else{
	echo "Not Found";
}

$conn->close();

?>