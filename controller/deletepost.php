<?php
require '../Database.php';
$config=require '../config.php';
$post_id=$_GET['post_id'];
$db=new Database($config['database']);
$del=$db->querys("DELETE FROM post WHERE post_id='$post_id'");
header('location:/');
?>