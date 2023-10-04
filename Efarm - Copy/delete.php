<?php
include 'connection.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $sql = "DELETE FROM `cow` WHERE id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        $message ='Data with Id tag '.$id.' Deleted Successfully';
        // function_alert($message);
        header('location:cowdis.php');
    }
}
?>