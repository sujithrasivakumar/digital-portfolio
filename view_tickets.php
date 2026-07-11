<?php
include "db.php"; // your DB connection file
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Tickets</title>
    <link rel="stylesheet" href="style.php">
</head>
<body>

<h2>All Tickets (Admin View)</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Source</th>
        <th>Destination</th>
        <th>Date</th>
        <th>Time</th>
        <th>Seats</th>
    </tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM tickets");

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['source']}</td>
                <td>{$row['destination']}</td>
                <td>{$row['travel_date']}</td>
                <td>{$row['travel_time']}</td>
                <td>{$row['available_seats']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='6'>No tickets found</td></tr>";
}
?>

</table>

<br>
<a href="admin_dashboard.php">⬅ Back to Admin Dashboard</a>

</body>
</html>

