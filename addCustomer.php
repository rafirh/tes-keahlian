<?php 
include './conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Add Customer</title>
</head>
<body class="" style="background-color: rgb(194, 194, 194);">
  <div class="content">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">
                        Add Customer
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Customer Name</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Customer Name"
                                    name="name"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Telephone</label>
                                    <input type="text" class="form-control" placeholder="Telephone" name="telp" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round" name="submit">Add</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <a href="index.php" class="btn btn-danger btn-round">Cancel</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4"></div>
    </div>
  </div>
  <!--   Core JS Files   -->
</body>
</html>
<?php
    $customer_id = date('Ymdsi');
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $telp = $_POST['telp'];
        $query = mysqli_query($conn, "insert into customer (customer_id,name,telp) values ('".$customer_id."','".$name."','".$telp."')");
        if($query){
            echo "<script>
                alert('Succesfully added');
                window.location.href = 'index.php'
            </script>";
        }else{
            echo "<script>
                alert('Failed added');
            </script>";
        }
      }
?>