<nav class="navbar navbar-expand-lg navbar-light bg-light sidebar">
  <div class="container-fluid">

    <div class="col-lg-3 col-sm-12">
      <a class="navbar-brand" href="#">
        <img src="images/linkedin.svg" alt="" width="30" height="24" class="d-inline-block align-text-top" /> Linkedin
      </a>
    </div>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="col d-flex justify-content-around align-items-center">
      <a class="navbar-brand position-relative" href="#">
        <i class="fa-solid fa-envelope p-3 border rounded-circle">
          <span class="position-absolute badge bg-danger">11</span></i></a>
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-heart p-3 border rounded-circle">
          <span class="position-absolute badge bg-danger">10</span></i></a>
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-users p-3 border rounded-circle">
          <span class="position-absolute badge bg-danger">11</span></i></a>
      <a class="navbar-brand" href="#">
        <i class="fa-solid fa-user-plus p-3 border rounded-circle"></i></a>

    </div>
    <div class="col-lg-3 col-sm-12 d-flex justify-content-end">
      <?php if($_SESSION['user_id']??false):?>
      <form class="form-inline">
        <div class="input-group">
          <!-- <input type="text" class="form-control" />
          <div class="input-group-append">
            <button class="btn btn-outline-dark" type="button" id="button-addon2">
              <i class="fa fa-search"></i></button> -->
          <?php else:?>
              <a href="/register"><button type="button" style="margin-left: 30px" class="btn btn-primary submit-button">Register</button></a>
          <a href="/login"><button type="button" style="margin-left: 10px" class="btn btn-primary submit-button">Login</button></a>
          <?php endif ?>

          <?php if($_SESSION['user_id']??false):?>
          <a href="/logout"><button type="button"  style="margin-left: 10px" class="btn btn-primary submit-button">Logout</button></a>
          <?php endif ?>
          <!-- </div> -->
        </div>
      </form>
    </div>
  </div>
</nav>

<!-- login modal -->
<div class="modal fade" id="mymodal" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="text-lg-center modal-title">Login</h4>
        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <form>
          <div class="mb-1">
            <label for="recipient-name" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="mb-1">
            <label for="message-text" class="col-form-label">Password:</label>
            <input type="password" class="form-control" id="recipient-pass">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <input type="submit" value="Close" class="btn btn-danger" data-bs-dismiss="modal" />
        <input type="submit" value="Save" class="btn btn-primary" />
      </div>
    </div>
  </div>
</div>

<!-- register modal -->
<div class="modal fade" id="registermodal" data-backdrop="static">
  <div class="modal-dialog modal-dialog-scrollable">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="text-center modal-title background-color:red">Register</h4>
        <button type="button" class="close" data-bs-dismiss="modal"><span>&times;</span></button>
      </div>

      <div class="modal-body">
        <form action="/controller/register.php" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label for="user_fname">First Name:</label>
            <input type="text" class="form-control" id="fname" name="fname">
          </div>
          <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="user_email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="user_password">Password:</label>
            <input type="password" class="form-control" id="password" name="passwrod">
          </div>
          <div class="form-group">
            <label>Gender:</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="male" value="male">
              <label class="form-check-label" for="male">
                Male
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="female" value="female">
              <label class="form-check-label" for="female">
                Female
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="other" value="other">
              <label class="form-check-label" for="other">
                Other
              </label>
            </div>
          </div>
          <div class="form-group">
            <label for="user_profile">Profile:</label>
            <input type="file" class="form-control-file" id="profile" name="profile">
          </div>
        </form>
      </div>

      <div class="modal-footer">
        <input type="submit" value="Close" class="btn btn-danger" data-bs-dismiss="modal" />
        <button type="submit" class="btn btn-success">Registerion</button>
      </div>
    </div>
  </div>
</div>