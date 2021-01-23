
<?php
session_start();
error_reporting(0);
$email = $_POST['email'];
$password = $_POST['password'];
$link=mysqli_connect("localhost","root","","resumedb");
if (!$link) {
 die("Connection failed: " . mysqli_connect_error());
}
$email = stripcslashes($email);
$password = stripcslashes($password);
$email = mysqli_real_escape_string($link,$email);
$password = mysqli_real_escape_string($link,$password);


mysqli_select_db($link,"resumedb");

$result = mysqli_query($link,"SELECT * FROM personal WHERE email='$email' AND password='$password'") or die("Failed to query database".mysqli_error($link));
$row=mysqli_fetch_array($result);
print_r($row);
if ($row['email'] == $email && $row['password'] == $password)
{
$_SESSION["name"] = $row['name'];
}else
{
echo "failed to login";
}
if (isset($_SESSION["name"])) {
 echo "Success";
 header("Location:view-resume.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <style>
body
{
	background-image: url(images/intro-bg.jpg);
}
a
{
	color: white;
}
h1
{
	color: black;
}
div{
	font-size: 1.5em;
	color: white;	
}
input{
  font-size: 1em;
  height: 2rem;

}

</style>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>My Site | Login</title>
</head>
<body>
  <center>
 <form action="user-login.php" method="post">
  <h1>User Login</h1><br>
 <div>Email :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="email" placeholder="Enter your email" size="25"></div>
 <br>
 <div>Password : <input type="password" name="password" placeholder="Enter your password" size="25"></div>
 <br>
 <input type="submit">
 <input type="reset">
 <p>
     <a href="user-register.html">Register here</a>
    </p>
  <p>
    <a href="login-page.html">Go Back</a>
    </p>
       
 </form>
</center>
</body>
</html>