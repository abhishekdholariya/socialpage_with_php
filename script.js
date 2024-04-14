$(document).ready(function () {
  $(".like").on("click", function () {
    var post_id = $(this).data("postid");
    $post = $(this);

    $.ajax({
      url: "controller/likes.php",
      type: "POST",
      data: {
        liked: 1,
        post_id: post_id,
      },
      success: function (response) {
        $post
          .parent()
          .find("span.like_count")
          .text(response);
        $post.addClass("hide");
        $post.siblings().removeClass("hide");
      },
    });
  });
  $(".unlike").on("click", function () {
    var post_id = $(this).data("postid");
    $post = $(this);
    console.log($post);
    $.ajax({
      url: "controller/likes.php",
      type: "POST",
      data: {
        unliked: 1,
        post_id: post_id,
      },
      success: function (response) {
        $post
          .parent()
          .find("span.like_count")
          .text(response);
        $post.addClass("hide");
        $post.siblings().removeClass("hide");
      },
    });
  });
});
