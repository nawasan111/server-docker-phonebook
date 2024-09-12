<?php
# this is for learning. So I didn't hide password.
$db_host = "mysql";
$db_username = "root";
$db_pass = "admin123";
$db_name = "lab5";

$conn = new mysqli($db_host, $db_username, $db_pass, $db_name);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$result = $conn->query("SELECT * FROM phonebook");
if (!$result) { ?>
    <P>Error performing query: <?php echo  $conn->error; ?></P>
<?php
    exit();
}
?>
<table width=100% cellpadding=10 cellspacing=0 border=1>
    <tr>
        <td><b>ID</b></td>
        <td><b>Name</b></td>
        <td><b>Email</b></td>
        <td><b>Phone</b></td>
        <td><b>Memo</b></td>
        <td><b>Date</b></td>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($result)) { ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['memo']; ?></td>
            <td><?php echo $row['date']; ?></td>
        </tr>
    <?php
    }
    ?>
</table>