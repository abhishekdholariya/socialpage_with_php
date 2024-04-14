<?php require 'partials/head.view.php' ?>
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <h3>Welcome</h3>
                <h3>Registration Form</h3><br><br>
                <a href="/login"><input type="submit" name="" value="Login" /></a><br/>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Enter Your Information</h3>
                        <div class="row register-form">
                            <div class="col-md-6">
                                <form action="/adduser" method="POST" enctype="multipart/form-data">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name *" name="fname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name *" name="lname">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Password *" name="password">
                                </div>
                                <div class="form-group">
                                    <div class="maxl">
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="male">
                                            <span> Male </span>
                                        </label>
                                        <label class="radio inline">
                                            <input type="radio" name="gender" value="female">
                                            <span>Female </span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="text" maxlength="10" class="form-control" placeholder="Your Phone *" name="phone">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Headline *" name="headline">
                                </div>
                                <div class="form-group">
                                    <label for="user_profile">Profile:</label>
                                    <input type="file" class="form-control-file" id="profile" name="profile">
                                </div>
                                <input type="submit" class="btnRegister" value="Register" />
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
    </html>