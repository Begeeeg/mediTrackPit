<?php
    include('database.php');

    if(isset($_POST['submitSignUp'])){ // Fixed button name
        $businessName = $_POST['businessName'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $check = "SELECT * FROM corpname WHERE username = '$username' OR email = '$email'";
        $result = $conn->query($check);
        if($result->num_rows > 0) {
            echo "Email Address is already existed!";
        } else {
            $insertQuery = "INSERT INTO corpname (businessName, email, username, password) VALUES ('$businessName', '$email', '$username', '$password')";
            if($conn->query($insertQuery) === TRUE){
                header("location: signInOut.php");
            } else {
                echo "Error: " . $conn->error;
            }
        }
    }

    if(isset($_POST['submitSignIn'])){ // Fixed button name
        $emailOrUsername = $_POST['username'] ?? $_POST['email']; // Use username or email
        $password = md5($_POST['password']);

        $sql = "SELECT * FROM corpname WHERE (username = '$emailOrUsername' OR email = '$emailOrUsername') AND password = '$password'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0){
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['email'] = $row['email'];
            header("location: home.php");
            exit();
        } else {
            echo "Error: Email and Password Not Found";
        }
    }

    mysqli_close($conn);
?>
