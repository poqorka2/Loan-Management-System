<?php
// invest_product.php

include 'db/connection.php';
include 'includes/header.php';

function fetchInvestmentProducts($conn) {
    $sql = "SELECT * FROM investment_products";
    $result = $conn->query($sql);
    return $result;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add'])) {
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $sql = "INSERT INTO investment_products (name, amount) VALUES ('$name', '$amount')";
        $conn->query($sql);
    } elseif (isset($_POST['edit'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $amount = $_POST['amount'];
        $sql = "UPDATE investment_products SET name='$name', amount='$amount' WHERE id='$id'";
        $conn->query($sql);
    } elseif (isset($_POST['delete'])) {
        $id = $_POST['id'];
        $sql = "DELETE FROM investment_products WHERE id='$id'";
        $conn->query($sql);
    }
}

$products = fetchInvestmentProducts($conn);
?>

<div class="container">
    <h2>Investment Products</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Product Name" required>
        <input type="number" name="amount" placeholder="Investment Amount" required>
        <button type="submit" name="add">Add Product</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Amount</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = $products->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['amount']; ?></td>
                    <td>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
                            <input type="number" name="amount" value="<?php echo $row['amount']; ?>" required>
                            <button type="submit" name="edit">Edit</button>
                        </form>
                        <form method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>

<?php include 'includes/footer.php'; ?>