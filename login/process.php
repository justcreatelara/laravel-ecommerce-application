<?php

    $username = $_POST['username'];
    $password = $_POST['password'];

    $conn = new mysqli("localhost", "root", "", "login");
    $result = $conn->query("select * from users where username = '$username' and password = '$password'") or die("failed to connect".mysql_error());
    
    $row = mysqli_fetch_array($result);
        if($row['username'] == $username && $row['password'] == $password){
            echo "login success".$row['username'];
        } else {
            echo "failed to login";
        }
?>