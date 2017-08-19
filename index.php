<?php

if (isset($_POST['submit'])) {
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$phone = filter_var($phone , FILTER_SANITIZE_NUMBER_INT);


echo $phone;


$conn= mysqli_connect('localhost' , 'root' , '' , 'migoo');
$sql="INSERT INTO register(username , email , phone) VALUES('$username' , '$email' , '$phone')";
$result= $conn->query($sql);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>training</title>
</head>
<body>
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
	
<input type="text" name="username" placeholder="Your name"/> <br>
<input type="text" name="email" placeholder="Your email"><br>
<input type="tel" name="phone" placeholder="Your phone"> <br>
<button type="submit" name="submit"> Submit</button>
</form>


</body>
</html>