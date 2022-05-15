<?php 
    include "./conn.php";
    $id = $_GET['order_id'];
    $qry = mysqli_query($conn, "select * from order where order_id = '".$id."'");
    $data=mysqli_fetch_array($qry);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Edit Order</title>
</head>
<body class="" style="background-color: rgb(194, 194, 194);">
  <div class="content">
    <div class="row mt-5">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card card-user">
                <div class="card-header">
                    <h5 class="card-title">
                        Edit Order
                    </h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Order ID</label>
                                    <input
                                    type="text"
                                    class="form-control"
                                    placeholder="Customer Name"
                                    name="name"
                                    value="<?=$data['order_id']?>"
                                    disabled
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label></label>
                                    <input type="text" class="form-control" placeholder="Telephone" name="telp" value= "<?=$data['telp']?>" required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="update ml-auto mr-auto">
                                <button type="submit" class="btn btn-primary btn-round" name="submit">Update</button>
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
  <script src="../dist/sweetalert2.all.min.js"></script>
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
</body>
</html>
<?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $telp = $_POST['telp'];
        
        $query = mysqli_query($conn, "update customer set 
        name = '".$name."',
        telp = '".$telp."' where customer_id = '".$id."'");
        if($query){
            echo "<script>
                alert('Succesfully edited');
                window.location.href = 'index.php'
            </script>";
        }else{
            echo "<script>
                alert('Failed edited');
            </script>";
        }
      }
?>