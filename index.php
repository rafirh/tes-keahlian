<?php 
    include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Customer</title>
</head>

<body>
    <div class="container mt-5">
        <h2>Customer Table</h2>
        <a href="addCustomer.php" class="btn btn-primary btn-round">Add Customer</a>
        <table class="table">
            <thead class="text-primary">
                <th>No.</th>
                <th>ID Customer</th>
                <th>Name</th>
                <th>Telephone</th>
                <th style="text-align:center">Action</th>
            </thead>
            <tbody>
                <?php
                $query = mysqli_query($conn, "select * from customer");
                $no = 0;
                while ($data_customer = mysqli_fetch_array($query)) {
                    $no++;
                ?>
                    <tr>
                        <td><?= $no ?></td>
                        <td><?= $data_customer['customer_id'] ?></td>
                        <td><?= $data_customer['name'] ?></td>
                        <td><?= $data_customer['telp'] ?></td>
                        <td style="text-align:center">
                            <a href="editCustomer.php?customer_id=<?= $data_customer['customer_id'] ?>" class="btn btn-success btn-round">Edit</a> |
                            <a href="deleteCustomer.php?customer_id=<?= $data_customer['customer_id'] ?>" class="btn btn-danger btn-round" onclick="return confirm('Are you sure delete this data ?')">Delete</a>
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