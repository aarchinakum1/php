<?php
$conn = mysqli_connect("localhost", "root", "", "musetips");

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<h2>Product Details</h2>

<table border="1" cellpadding="10">
    <tr>
        <th>ID</th>
        <th>Product Name</th>
        <th>Price</th>
        <th>Category</th>
        <th>Description</th>
    </tr>

<?php
while ($row = mysqli_fetch_assoc($result)) {
?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['product_name']; ?></td>
        <td><?php echo $row['price']; ?></td>
        <td><?php echo $row['category']; ?></td>
        <td><?php echo $row['description']; ?></td>
    </tr>
<?php
}
?>
</table>