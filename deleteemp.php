<?php

    include "./dbcon.php";
    $id=mysqli_real_escape_string($con,$_GET['ID']);
    $query="DELETE FROM employee where ID='$id'";
    mysqli_query($con,$query);
    header('location:./Dashboard.php');

?>