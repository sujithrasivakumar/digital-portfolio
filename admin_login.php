<?php
session_start();
if (isset($_POST['login'])) {
    if ($_POST['username'] == "admin" && $_POST['password'] == "admin123") {
        $_SESSION['admin'] = true;
        header("Location: admin_dashboard.php");
    } else {
        $error = "Invalid Admin Login";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Admin Login</h2>

<?php if(isset($error)) echo $error; ?>

<form method="post">
    <input type="text" name="username" placeholder="Admin Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button name="login">Login</button>
</form>

</body>
</html>

