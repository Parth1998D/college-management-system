<?php

include_once 'db.php';
session_start();
if (isset($_POST['is_login']) && $_POST['is_login'] == 1) {
    $user = $_POST['user'];
    $password = $_POST['password'];



    $sql = "SELECT * FROM users where user_id='$user' and password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $_SESSION['name'] = $row['first_name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['first_name'];
            $_SESSION['last_name'] = $row['last_name'];
            $_SESSION['email_id'] = $row['email_id'];
            $_SESSION['password'] = $row['password'];
            echo '1';
        }
    } else {
        echo '0';
    }
}
if (isset($_POST['is_singnup']) && $_POST['is_singnup'] == 1) {

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email_id = $_POST['email_id'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users (user_id,first_name,last_name,email_id,password)VALUES ('$user_id','$firstname','$lastname','$email_id','$password')";

    if ($conn->query($sql) === TRUE) {
        echo "1";
    } else {
        echo "0";
    }
}

if (isset($_POST['is_singnup_edit']) && $_POST['is_singnup_edit'] == 1) {


    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email_id = $_POST['email_id'];
    $user_id = $_POST['user_id'];
    $password = $_POST['password'];
    $id = $_SESSION['id'];
    $sql = "UPDATE `users` SET `user_id`='$user_id',`first_name`='$firstname',`last_name`='$lastname',`email_id`='$email_id',`password`='$password' WHERE id='$id'";

    if ($conn->query($sql) === TRUE) {

        $_SESSION['name'] = $firstname;
        $_SESSION['user_id'] = $user_id;
        $_SESSION['first_name'] = $firstname;
        $_SESSION['last_name'] = $lastname;
        $_SESSION['email_id'] = $email_id;
        $_SESSION['password'] = $password;
        echo "1";
    } else {
        echo "0";
    }
}
?>