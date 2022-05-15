<?php
require_once './conn.php';
$query = mysqli_query($conn, "select * from orders join customer on orders.customer_id = customer.customer_id");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Order List</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Order List</h2>
        <a href="addOrder.php" class="btn btn-primary btn-round">Add Order</a>
        <table class="table">
            <thead class="text-primary">
                <th>No.</th>
                <th>Order ID</th>
                <th>Name</th>
                <th>Telp</th>
                <th>Distance</th>
                <th>Price</th>
                <th>Discount</th>
                <th style="text-align:center">Action</th>
            </thead>
            <tbody>
                <?php
                $no = 0;
                while($data_order = mysqli_fetch_assoc($query)){
                    $no++;
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_order['order_id'] ?></td>
                        <td><?= $data_order['name'] ?></td>
                        <td><?= $data_order['telp'] ?></td>
                        <td><?= $data_order['distance'] ?> Km</td>
                        <td>Rp <?= $data_order['price'] ?></td>
                        <td><?= $data_order['discount'] ?> %</td>
                        <td style="text-align:center">
                            <a href="editOrder.php?order_id=<?= $data_order['order_id'] ?>" class="btn btn-success btn-round">Edit</a> |
                            <a href="deleteOrder.php?order_id=<?= $data_order['order_id'] ?>" class="btn btn-danger btn-round" onclick="return confirm('Are you sure delete this data ?')">Delete</a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
