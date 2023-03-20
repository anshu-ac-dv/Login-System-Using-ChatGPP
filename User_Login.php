<?php

    if (isset($_POST['submit'])) {
        include "dbconn.php";
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT * FROM `users` WHERE Email = '$username' and Password = '$password'";
        $result = mysqli_query($conn,$sql);

        if ($result) {
            header("location:Dashboard.php");
        }
    }

?>