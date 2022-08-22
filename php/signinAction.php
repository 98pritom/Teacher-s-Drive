<?php
include '../php/config.php';

$l_email = $_POST['l_email'];
$l_pass = $_POST['l_password'];

$result = mysqli_query($conn, "SELECT * FROM `users` WHERE email = '$l_email' AND password = '$l_pass'");

if(mysqli_num_rows($result) > 0){
    session_start();
    $_SESSION['l_email'] = $l_email;
    echo "<script>location.href='../home.html'</script>";
}
else{
    echo "<script>alert('Incorrect username or password')</script>";
    echo "<script>location.href='../signin.html'</script>";
}