<?php  

    if (isset($_POST["submit"])) {
        include "dbconn.php";
        $name = $_POST["name"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        
        if ($password == $confirm_password) {
            $sql = "INSERT INTO `users`(`Name`, `Email`, `Password`) VALUES ('$name','$email','$password')";
            $result = mysqli_query($conn,$sql);

            if ($result) {
                echo "Registerd Suesss";
            }
            else {
                echo "Eorror to Save in Database";
            }
        }
        else {
            echo "password do not match";
        }
    }
    else {
        
    }

?>