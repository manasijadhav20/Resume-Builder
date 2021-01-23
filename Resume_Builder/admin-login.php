
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
 header("Location:UpdateForm.php");
}

?>

