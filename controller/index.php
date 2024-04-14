<?php
require_once 'Database.php';
$config=require 'config.php';
// if(!isset($_SESSION['login_session'])){
//     header("location:/login");
// }
// else{
//     $user_id=$_SESSION['user_id'];
// }
//connect database
$db = new Database($config['database']);
$query="SELECT * FROM post p INNER JOIN user u ON p.user_id=u.user_id  ORDER BY post_id DESC";

$post=$db->querys($query)->fetchAll();
view("index.view.php",[
    'post'=>$post,
]);

?>