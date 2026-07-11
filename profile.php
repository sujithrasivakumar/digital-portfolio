<?php 
session_start(); 
include "db.php";

if (!isset($_SESSION['user_id'])) 
    {
         header("Location: index.php"); 
         exit();
}

$id = $_SESSION['user_id'];
$result = mysqli_query($conn, "SELECT * FROM users WHERE id=$id");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Profile</title>
<link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Welcome <?php echo $user['name']; ?></h2>
<p>Email: <?php echo $user['email']; ?></p>

<p><a href="search.php">Search Tickets</a></p>
</body>
</html>