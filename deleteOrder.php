<?php 
    if($_GET['order_id']){
        include "./conn.php";
        $qry=mysqli_query($conn,"delete from orders where order_id='".$_GET['order_id']."'");
        if($qry){
            echo "<script>alert('Successfully deteted');location.href='showOrder.php';</script>";
        } else {
            echo "<script>alert('Failed deteted');location.href='showOrder.php';</script>";
        }
    }