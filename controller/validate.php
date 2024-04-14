<?php
require 'Database.php';
$config=require 'config.php';
$db = new Database($config['database']);
if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email=$_POST["email"];
    $password=$_POST["password"];
    $select=$db->querys("SELECT * FROM user where email='$email'")->fetch(PDO::FETCH_ASSOC);
    if(password_verify($password,$select['password'])){
        $_SESSION['login_session']=true;
        $_SESSION=$select;

        header('location:/');
    }
    
}
?>