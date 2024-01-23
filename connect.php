<?php
    $con=new mysqli('localhost','root','','grudphp');
    if(!$con){
        die(mysqli_error($con));
        // header('location:display.php');
    }

?>