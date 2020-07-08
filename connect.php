<?php
$servername = "localhost";
$username = "root";
$password= "";

//create connection
$con = new mysqli ($servername, $username ,$password,"self");
//register
if (isset($_POST['reg'])) 
{
	// echo "string";
	// exit();
$name = mysqli_real_escape_string($con, $_POST['name']);
$phone = mysqli_real_escape_string($con, $_POST['phone']);
$email = mysqli_real_escape_string($con, $_POST['email']);
$address = mysqli_real_escape_string($con, $_POST['address']);
$password = mysqli_real_escape_string($con, $_POST['password']);
$confirm_pass =  mysqli_real_escape_string($con, $_POST['confirm_pass']);

if ($password == $confirm_pass)
{
	$query = "INSERT INTO register (name,email,password,phone,address)
   VALUES('$name','$email','$password','$phone','$address')";
	mysqli_query($con, $query);

echo "<script>alert(Account created successfully!')</script>";
 
header('location:login.php');
}
else {
	echo "<script>alert('Passwords does not match!')</script>";
}
}

//login
if(isset($_POST['log'])){

	// echo "hello";
	// exit();
$email = $_POST['email'];
$password = $_POST['password'];
$query = "select * from register where email= '$email' && password='$password' ";
 $result = mysqli_query($con, $query);
    $num = mysqli_num_rows($result);

    if ($num == 1) {
 // $row2 = $result->fetch_assoc();
echo "<script>alert('Welcome')</script>";
header('location:index.php');
}
else{
	echo "<script>alert('Wrong username/password combination!')</script>";;
}
	
}
//index queries
if (isset($_POST['submit'])) 
{
	// echo "string";
	// exit();
$names = mysqli_real_escape_string($con, $_POST['names']);
// $com = mysqli_real_escape_string($con, $_POST['phones']);
$emails = mysqli_real_escape_string($con, $_POST['emails']);
$comments = mysqli_real_escape_string($con, $_POST['comments']);
// $password = mysqli_real_escape_string($con, $_POST['password']);
// $confirm_pass =  mysqli_real_escape_string($con, $_POST['confirm_pass']);

// if ($password == $confirm_pass)
// {
	$query = "INSERT INTO index (name,email,comments)
   VALUES('$names','$emails','$comments')";
	mysqli_query($con, $query);

echo "<script>alert('Query submitted successfully!')</script>";
 
 header('location:index.php');
}
// else {
// 	echo "<script>alert('Passwords does not match!')</script>";
// }
// }

?>
