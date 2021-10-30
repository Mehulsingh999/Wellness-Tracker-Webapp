<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli('localhost','root', '', 'wellnesstracker');
if($conn->connect_error) {
	die('connection failed : '.$conn->connect_error);
} else {
	$stmt = $conn->prepare("insert into registration(name, email, password) values(?, ?, ?)");
	$stmt->bind_param("sss", $name, $email, $password);
	$stmt->execute();

	 echo "<script type='text/javascript'>
            document.location='login.html'</script>";

	echo `
	<!DOCTYPE html>
	<html>
	<head>
    <meta charset="utf-8">
    <title></title>
	</head>
	<body>
	<form action="login.php">
    <input type="submit" value="Login Now" />
    </form>
	</body>
	</html>
	`;

	$stmt->close();
	$conn->close();
}
?>