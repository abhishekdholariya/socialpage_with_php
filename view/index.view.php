<?php
require 'partials/head.view.php'
?>
<!-- navbar start -->
<?php require 'partials/nav.view.php'; ?>
<!-- navbar end -->

<div class="container-fluid gedf-wrapper">
    <div class="row">
        <!-- profile start -->
        <?php require 'partials/profile.view.php' ?>
        <!--  profile end -->

        <!-- main conitant -->
        <div class="col-md-6 gedf-main">
            <?php if ($_SESSION['user_id'] ?? false) : ?>

                <div class="card gedf-card mb-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="45" height="45" src="images/facebook2.jpeg" alt="" />
                                </div>
                                <div class="ml-2">
                                    <div>
                                        <button type="button" class="btn btn-light btn-lg border custom" data-bs-toggle="modal" data-bs-target="#post_modal">Start a post</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <class="mb-1" hr />
            <?php endif ?>
            <!-- post start -->
            <?php foreach ($post as $posts) : ?>
                <div class="card gedf-card mb-2">
                    <div class="card-header">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="mr-2">
                                    <img class="rounded-circle" width="50" height="50" src="images/<?= $posts['profile'] ?>" alt="" />
                                </div>
                                <div class="ml-2">
                                    <div class="h5 m-0"><?= $posts['fname'] ?></div>
                                    <div class="h7 text-muted"><?= $posts['headline'] ?></div>
                                </div>
                            </div>

                            <div class="dropdown">
                                <button class="btn btn-link" type="button" id="drop-dwon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-ellipsis-h"></i>
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                    <button class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#update_postmodal">Edit</button>
                                    <a href="/controller/deletepost.php?post_id=<?php echo $posts['post_id'] ?>"><button class="dropdown-item" type="button">Delete</button></a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="card-body">
                        <div class="text-muted h7 mb-2 d-flex justify-content-between">
                            <h5 class="card-title">
                                <?= $posts['post_meassage'] ?>
                            </h5>
                            <i class="fa fa-clock-o"><?= $posts['post_datetime'] ?></i>
                        </div>
                        <p class="card-text">
                            <img src="images/<?= $posts['post_img'] ?>" style="height: 300px" ; alt="post images" />
                        </p>
                    </div>

                    <div class="card-footer">
                        <?php
                        $userid=$_SESSION['user_id'];
                        $con=mysqli_connect("localhost","root","","socialpage");
                        $sel="SELECT * FROM post_like WHERE user_id=$userid AND post_id='$posts[post_id]'";
                        $result=mysqli_query($con,$sel);
                        $row=mysqli_num_rows($result);
                        if ( $row== 1) :
                        ?>
                            <span class="unlike fa-regular fa-heart" data-postid="<?php echo $posts['post_id']; ?>"></span>
                            <span class="like hide fa-solid fa-heart" style="color: #e60505;" data-postid="<?php echo $posts['post_id']; ?>"></span>
                        
                        <?php else : ?>
                        
                            <span class="like fa-solid fa-heart" style="color: #e60505;" data-postid="<?php echo $posts['post_id']; ?>"></span>
                            <span class="unlike hide fa-regular fa-heart" data-postid="<?php echo $posts['post_id']; ?>"></span>
                        
                        <?php endif; ?>
                        <span class="like_count"><?php echo $posts['like_count']; ?></span>
                        <!-- <span><i class="fa fa-comment"></i></span>
                        <span class="card-link"><i class="fa fa-mail-forward"> </i></span> -->
                    </div>

                </div>
            <?php endforeach; ?>
            <!-- Post end -->
        </div>
        <div class="col-md-3">
            <?php require 'partials/news.view.php' ?>
            <hr />
            <?php require 'partials/footer.view.php' ?>
        </div>
    </div>
</div>


<!-- add post modal -->
<div class="modal fade" id="post_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post to Anyone</h5>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="/addpost" method="POST" enctype="multipart/form-data">
                    <div class="card gedf-card mb-2">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="posts">
                                    <div class="form-group">
                                        <label class="sr-only" for="message">Post</label>
                                        <textarea class="form-control" id="message" name="meassage" placeholder="What do you want to talk about?"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="file" name="img" id="img">
                            </div>
                </form>
                <div class="btn-toolbar justify-content-end">
                    <div class="btn-group">
                        <button type="submit" id="addpost" class="btn btn-success">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- update post modal -->
<div class="modal fade" id="update_postmodal" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Post to Anyone</h5>
                <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                <form action="/updatepost" method="POST" enctype="multipart/form-data">
                    <div class="card gedf-card mb-2">
                        <div class="card-body">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="posts">
                                    <div class="form-group">
                                        <label class="sr-only" for="message">Post</label>
                                        <textarea class="form-control" id="message" name="meassage" placeholder="What do you want to talk about?"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="file" name="img" id="img">
                            </div>
                </form>
                <div class="btn-toolbar justify-content-end">
                    <div class="btn-group">
                        <button type="submit" id="addpost" class="btn btn-success">Post</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>