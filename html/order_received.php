<?php
    //START A SESSION
    session_start();

    include('../server.php');

    //CHECK IF THE USER IS LOGGED IN
    if($_SESSION["member"] !== true){
        header("location: ../index.php");
        exit;
    }

    $permission = $_SESSION["permission"];
    $uid = $_SESSION["uid"];

    $cartID = $_REQUEST['cartID'];

    $sql_update = "UPDATE cart SET shipping_status = 'Order Received' WHERE cart_id='$cartID'";
    
    if(mysqli_query($conn, $sql_update)){
        header("location: completed.php?status=Product Successfully Deleted!");
    }else{
        header("location: to_received.php?status=Ops! Something wrong!");
        echo $categoryID;
    }

    mysqli_close($conn);

?>