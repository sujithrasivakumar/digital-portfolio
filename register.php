<?PHP	
include "db.php";

if (isset($_POST['register'])) {	
    
$name= $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
$sql = "INSERT INTO users (name, email, password)	VALUES ('$name', '$email', '$password')";

if	(mysqli_query($conn,	$sql))	{ header("Location: index.php");		
exit();
} else 
    {	
      echo "Email already exists";
}
}

?>

<!DOCTYPE html>
<html>
<head>
 <title>Register</title>
<link rel="stylesheet" href="style.php">
</head>
<body>
 
<h2>Register</h2>

<form method="post">
<input type="text" name="name" placeholder="Name" required><br><br>
<input type="email" name="email" placeholder="Email" required><br><br>
<input type="password" name="password" placeholder="Password" required><br><br>
<button type="submit" name="register">Register</button> </form>
<p><a href="index.php">Go to Login</a></p>

</body>
</html>
