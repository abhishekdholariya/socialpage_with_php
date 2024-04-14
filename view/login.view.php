<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/socialpage.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    
</head>
<body> -->
<?php require'partials/head.view.php' ?>    
<div class="container register">
        <div class="row">
            <div class="col-md-3 register-left d-flex align-items-center">
                <h3>Welcome Back</h3>
            </div>
            <div class="col-md-9 register-right">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                        <h3 class="register-heading">Login Form</h3>
                        <form action="/validate" method="POST">
                        <div class="row register-form d-flex justify-content-center">
                            <div class="col-8">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Your Email *" name="email">
                                </div>
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password *" name="password">
                                </div>
                                <div>
                                    <h6>New to Linkedin? <a href="/register">Join Now</a></h6>
                                </div>
                            </div>
                            <input type="submit" class="btnRegister" value="Login" />
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
<?php require'partials/footer.view.php' ?>    

    <!-- Bootstrap JS
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html> -->