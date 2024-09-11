<?php
# this is for learning. So I didn't hide password.
$db_host = "mysql";
$db_username = "root";
$db_pass = "admin123";
$db_name = "lab5";
$conn = new mysqli($db_host, $db_username, $db_pass,$db_name);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$result = mysqli_query($conn,"SELECT * FROM phonebook");
if (!$result) {
echo("<P>Error performing query: " . mysql_error() . "</P>");
exit();
}
echo '<table width=100% cellpadding=10 cellspacing=0 border=1>';
echo '<tr><td><b>ID</b></td><td><b>Name</b></td><td><b>Email</b></td>';
echo '<td><b>Phone</b></td><td><b>Memo</b></td><td><b>Date</b></td></tr>';
while ( $row = mysqli_fetch_assoc($result) ) {
echo '<tr>';
echo '<td>' .$row['id']. '</td>';
echo '<td>' .$row['name']. '</td>';
echo '<td>' .$row['email']. '</td>';
echo '<td>' .$row['phone']. '</td>';
echo '<td>' .$row['memo']. '</td>';
echo '<td>' .$row['date']. '</td>';
echo '</tr>';
}
echo '</table>';
?>
