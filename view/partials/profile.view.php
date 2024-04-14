<div class="col-md-3">
  <div class="card">
    <div class="card-body" data-bs-toggle="modal" data-bs-target="#profilemodal">
      <div class="h5 text-center">My Profile</div>
      <div class="m-0">
        <img class="rounded-circle user-img" width="70" height="60" src="images/<?php echo $_SESSION['profile'] ?>" alt="profile_img" />
      </div>
      <div class="h7 font-weight-bold text-center">
        UserName : <?php echo $_SESSION['fname'] ?>
      </div>
      <div class="h7 font-weight-bold text-center">
        <?php echo $_SESSION['headline']?>
      </div>
      <div class="h7 font-weight-bold text-center">
        <ul class="list-group list-group-flush">
          <li class="list-group-item">
            <div class="h6 text-muted">Followers</div>
            <div class="h5">523</div>
          </li>
          <li class="list-group-item">
            <div class="h6 text-muted">City</div>
            <div class="h5">Ahmedabad, Gujarat, India</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>


<!-- profile modal -->
<div class="modal fade" id="profilemodal" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="text-lg-center modal-title">Profile</h4>
        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <form action="controller/updateprofile.php?user_id=<?php echo $id=2;?>" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="user_fname">First Name:</label>
            <input type="text" class="form-control" id="fname" name="fname" value="<?php echo $_SESSION['fname'] ?>">
          </div>
          <div class="form-group">
            <label for="username">Last Name:</label>
            <input type="text" class="form-control" id="username" name="username" value="<?php echo $_SESSION['lname'] ?>">
          </div>
          <div class="form-group">
            <label for="user_email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_SESSION['email'] ?>">
          </div>
          <div class="form-group">
            <label for="user_password">Password:</label>
            <input type="password" class="form-control" id="password" name="passwrod" value="<?php echo $_SESSION['password'] ?>">
          </div>
          <!-- <div class="form-group">
            <label>Gender:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="male" value="<?php //echo $_SESSION['gender'] ?>">
              <label class="form-check-label" for="male">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="female" value="<?php //echo $_SESSION['gender'] ?>">
              <label class="form-check-label" for="female">
                Female
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="other" value="<?php //echo $_SESSION['gender'] ?>">
              <label class="form-check-label" for="other">
                Other
              </label>
            </div>
          </div> -->
          <div class="form-group">
            <label for="user_profile">Profile:</label>
            <input type="file" class="form-control-file" id="profile" name="profile" value="<?php echo $_SESSION['profile'] ?>">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <input type="submit" value="Close" class="btn btn-danger" data-bs-dismiss="modal" />
        <button type="submit" id="updateprofile" class="btn btn-success">Save</button>
      </div>
    </div>
  </div>
</div>