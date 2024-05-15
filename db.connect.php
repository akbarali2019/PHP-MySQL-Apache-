<?php
    //connect database
    $conn = mysqli_connect('localhost', '***', '****', 'kefa_pizza');

    //check connection
    if(!$conn){
        echo 'Connection Error: ' . mysqli_connect_error();
    }
?>
