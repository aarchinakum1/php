<?php
$conn = mysqli_connect("localhost","root","1234","product");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_type = $_POST['product_type'];
    $product_qty = $_POST['product_qty'];

    $image_name = $_FILES['product_image']['name'];
    $image_tmp = $_FILES['product_image']['tmp_name'];

    move_uploaded_file($image_tmp, "images/".$image_name);

    $sql = "INSERT INTO product(product_name,product_price,product_type,product_image,product_qty)
            VALUES('$product_name','$product_price','$product_type','$image_name','$product_qty')";

    if(mysqli_query($conn,$sql))
    {
        echo "<script>alert('Product Uploaded Successfully');</script>";
    }
    else
    {
        echo "Error: ".mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product Form</title>
</head>
<body>

<h2>Product Upload Form</h2>

<form method="post" enctype="multipart/form-data">

<label>Product Name</label><br>
<input type="text" name="product_name" required><br><br>

<label>Product Price</label><br>
<input type="number" name="product_price" required><br><br>

<label>Product Type</label><br>
<select name="product_type" required>
    <option value="">Select</option>
    <option>Electronics</option>
    <option>Fashion</option>
    <option>Food</option>
</select><br><br>

<label>Product Image</label><br>
<input type="file" name="product_image" required><br><br>

<label>Product Quantity</label><br>
<input type="number" name="product_qty" required><br><br>

<input type="submit" name="submit" value="Upload Product">

</form>

</body>
</html>