<?php 
    if($_GET['customer_id']){
        include "./conn.php";
        $qry=mysqli_query($conn,"delete from customer where customer_id='".$_GET['customer_id']."'");
        if($qry){
            echo "<script>alert('Successfully deteted');location.href='index.php';</script>";
        } else {
            echo "<script>alert('Failed deteted');location.href='index.php';</script>";
        }
    }