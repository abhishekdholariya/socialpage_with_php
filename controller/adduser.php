<?php
require 'Database.php';
$config=require 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $phone=$_POST['phone'];
    $pass=$_POST['password'];
    $password=password_hash($pass, PASSWORD_DEFAULT);
    $headline=$_POST['headline'];
    $gender=$_POST['gender'];
    $profile = $_FILES['profile']['name'];
    $img_tmp_name = $_FILES['profile']['tmp_name'];
    $post_img_folder = '../images/'.$img;

    $db = new Database($config['database']);
    
    $post = $db->querys("INSERT INTO `user`(`fname`, `lname`, `email`, `password`, `phone`, `headline`, `gender`, `profile`) VALUES ('$fname','$lname','$email','$password','$phone','$headline','$gender','$profile')");
    
    move_uploaded_file($img_tmp_name, $post_img_folder);
    
    header('location:/login');
}
?>