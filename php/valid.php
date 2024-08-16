<?php
if(isset($_POST['register'])){
    $username = $_POST['username'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    if(isset($_POST['iagree'])){
        if($user_password === $confirm_password){
            echo "Dear $first_name $last_name,<br>";
            echo "Your information is as follows:<br>";
            echo "Username: $username<br>";
            echo "First Name: $first_name<br>";
            echo "Last Name: $last_name<br>";
            echo "Email: $email<br>";
            echo "Gender: $gender<br>";
        } else {
            echo "Passwords do not match.";
        }
    } else {
        echo "Please Accept the terms and conditions";
    }
}
?>
