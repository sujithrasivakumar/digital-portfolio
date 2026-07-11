<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: admin_login.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Admin Dashboard</title>
<link rel="stylesheet" href="style.php">
</head>
<body>

<h2>Admin Dashboard</h2>

<a href="add_ticket.php">➕ Add Ticket</a><br><br>
<a href="view_tickets.php">📋 View Tickets</a><br><br>
<a href="logout.php">Logout</a>

</body>
</html>
