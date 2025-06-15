<?php
include 'db/connection.php';
include 'includes/header.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_product'])) {
        // Code to add a new investment product
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_rate = $_POST['product_rate'];
        
        $query = "INSERT INTO investment_products (name, description, rate) VALUES ('$product_name', '$product_description', '$product_rate')";
        mysqli_query($conn, $query);
    }

    if (isset($_POST['edit_product'])) {
        // Code to edit an existing investment product
        $product_id = $_POST['product_id'];
        $product_name = $_POST['product_name'];
        $product_description = $_POST['product_description'];
        $product_rate = $_POST['product_rate'];
        
        $query = "UPDATE investment_products SET name='$product_name', description='$product_description', rate='$product_rate' WHERE id='$product_id'";
        mysqli_query($conn, $query);
    }

    if (isset($_POST['delete_product'])) {
        // Code to delete an investment product
        $product_id = $_POST['product_id'];
        
        $query = "DELETE FROM investment_products WHERE id='$product_id'";
        mysqli_query($conn, $query);
    }
}

$query = "SELECT * FROM investment_products";
$result = mysqli_query($conn, $query);
?>

<div class="container">
    <h2>Investment Products</h2>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Rate</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['description']; ?></td>
                    <td><?php echo $row['rate']; ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete_product" class="btn btn-danger">Delete</button>
                        </form>
                        <button class="btn btn-warning" onclick="editProduct(<?php echo $row['id']; ?>)">Edit</button>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    <h3>Add New Product</h3>
    <form method="POST">
        <div class="form-group">
            <label for="product_name">Product Name:</label>
            <input type="text" name="product_name" required>
        </div>
        <div class="form-group">
            <label for="product_description">Description:</label>
            <textarea name="product_description" required></textarea>
        </div>
        <div class="form-group">
            <label for="product_rate">Rate:</label>
            <input type="number" name="product_rate" required>
        </div>
        <button type="submit" name="add_product" class="btn btn-primary">Add Product</button>
    </form>
</div>

<script>
function editProduct(id) {
    // Code to populate the edit form with the product details
    // This can be done using AJAX or by redirecting to an edit page
}
</script>

<?php
include 'includes/footer.php';
?>