<?php session_start();?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>

<body>
    <?php include 'header.php';?>


    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Login</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Login</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- login Begin -->
    <section class="login">
        <div class="container">
            <div class="login__from">
                
                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                    <form enctype="" method="post" action="?page=/login_model">
                        <!-- login -->
                        <div class="form-outline mb-4">
                            <h3>Login</h3>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                        <input type="email" id="loginName" name="email" class="form-control" placeholder="Your Email" required/>
                        </div>
                
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                        <input type="password" id="loginPassword" name="pass" class="form-control" placeholder="Password" required/>
                        </div>
                
                        <!-- 2 column grid layout -->
                        <div class="row mb-4">
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Checkbox -->
                            <div class="form-check mb-3 mb-md-0">
                            <input class="form-check-input" type="checkbox" value="" id="loginCheck" />
                            <label class="form-check-label" for="loginCheck"> Remember me </label>
                            </div>
                        </div>
                
                        <div class="col-md-6 d-flex justify-content-center">
                            <!-- Simple link -->
                            <a href="#!">Forgot password?</a>
                        </div>
                        </div>
                
                        <!-- Submit button -->
                        <button type="submit" class="btn btn-success btn-block mb-4">Log In</button>
                
                        <!-- Register buttons -->
                        <div class="text-center">
                        <p>Not a member? <a href="?page=/sign">Register</a></p>
                        </div>
                    </form>
                    </div>
                </div>
                <!-- Pills content -->
            </div>
        </div>
    </section>
    <!-- login End -->

    <?php include 'footer.php';?>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>