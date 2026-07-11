<?php
session_start(); 
include "db.php";


if (isset($_POST['login'])) {
$email = trim($_POST['email']);
$password = $_POST['password'];


$result = mysqli_query($conn, "SELECT * FROM users WHERE TRIM(LOWER(email)) = TRIM(LOWER('$email'))");
if (mysqli_num_rows($result) == 1)
     {
      $row = mysqli_fetch_assoc($result);

if (password_verify($password, $row['password']))
     {
     $_SESSION['user_id'] = $row['id'];
	header("Location: profile.php");		
    exit();	
} 
else 
      { echo "Invalid password";
}

} 
else
     {
     echo "Invalid email";
}

}
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form method="post">
        <input type="email" name="email" placeholder="Email" required><br><br>
        <input type="password" name="password" placeholder=" password" required><br><br>
        <button type="submit" name="login">login</button>
        <p><a href="register.php">Register</a></p>
</body>
</html>