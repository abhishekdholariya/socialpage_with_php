<?php
$con = mysqli_connect('localhost', 'root', '', 'socialpage');
session_start();
$postid = $_POST['post_id'];
$userid = $_SESSION['user_id'];
if (isset($_POST['liked'])) {
    $result = mysqli_query($con, "SELECT * FROM post WHERE post_id=$postid");
    $row = mysqli_fetch_array($result);
    $n = $row['like_count'];

    mysqli_query($con, "INSERT INTO post_like (user_id, post_id) VALUES ($userid, $postid)");
    mysqli_query($con, "UPDATE post SET like_count=$n-1 WHERE post_id=$postid");

    echo $n - 1;
    exit();
}
if (isset($_POST['unliked'])) {
    $postid = $_POST['post_id'];
    $result = mysqli_query($con, "SELECT * FROM post WHERE post_id=$postid");
    $row = mysqli_fetch_array($result);
    $n = $row['like_count'];

    mysqli_query($con, "DELETE FROM post_like WHERE post_id=$postid AND user_id=$userid");
    mysqli_query($con, "UPDATE post SET like_count=$n+1 WHERE post_id=$postid");

    echo $n + 1;
    exit();
}
