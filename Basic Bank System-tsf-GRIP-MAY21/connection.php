<?php

$username = "id16852325_root";
$password = "Aim@15102002";
$server = "localhost";
$db = "id16852325_grip_may21";

$con = mysqli_connect($server,$username,$password,$db);

if($con){
    //echo "Connection Success";
    ?>
    <script>
        alert('connection successfull')
    </script>
    <?php
}else{
    echo "Failed";
}
?>
