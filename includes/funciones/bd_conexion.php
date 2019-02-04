<?php
    $conn = new mysqli('localhost', 'root', '123456', 'conferencia');

    if ($conn->connect_error) {
        echo $error -> $conn->connect_error;
    }
 ?>