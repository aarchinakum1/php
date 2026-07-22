<?php
$conn = mysqli_connect("localhost", "root", "", "musetips");

$sql = "SELECT * FROM customer";
$result = mysqli_query($conn, $sql);
?>

<h2>Customer Records</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['mobile']; ?></td>
    </tr>
<?php
}
?>
</table>