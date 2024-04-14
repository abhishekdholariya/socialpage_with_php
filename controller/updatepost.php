<?php
echo"hello";
// require '../Database.php';
// $config=require '../config.php';

// $post_id=$_GET['post_id'];
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $meassage = $_POST['meassage'];
//     $img = $_FILES['img']['name'];
//     $img_tmp_name = $_FILES['img']['tmp_name'];
//     $post_img_folder = '../images/'.$img;
//     $user_id = $_SESSION['user_id'];
//     $db = new Database($config['database']);
    
//     // $post = $db->querys("INSERT INTO `post`(`post_meassage`, `post_img`, `post_datetime`, `user_id`) VALUES ('$meassage','$img',NOW(),'$user_id')");
//     $update=$db->querys("UPDATE `post` SET `post_meassage`='$meassage',`post_img`='$img',`post_datetime`='[value-4]',`user_id`='[value-5]' WHERE 1");    
//     move_uploaded_file($img_tmp_name, $post_img_folder);
    
//     header('location:/');
// }

?>