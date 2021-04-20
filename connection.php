<?php

$username = 'root';
$password = '';
$server = 'localhost';
$db = 'crudyoutube';


$con = mysqli_connect($server,$username,$password, $db );

if($con){
    // echo "Conection Successful";

    ?>
    <script>
    alert('success');
    </script>

    <?php
}else{
    echo "No Connection";
    die("No Connection". mysqli_connect_error());
}

?>