
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
                        <h2>Create An Account</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Create An Account</span>
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
                        <form enctype="" method="post" action="?page=/sign_model">
                            <!-- login -->
                            <div class="form-outline mb-4">
                                <h3>Create An Account</h3>
                            </div>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                            <input type="text" id="registerName" name="user" class="form-control" placeholder="Your Name" required/>
                            </div>
                    
                    
                            <!-- Email input -->
                            <div class="form-outline mb-4">
                            <input type="email" id="registerEmail" name="email" class="form-control" placeholder="Your Email" required/>
                            </div>
                    
                            <!-- Password input -->
                            <div class="form-outline mb-4">
                            <input type="password" id="registerPassword" name="pass" class="form-control" placeholder="Password" required/>
                            </div>
                    
                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                            <label class="form-check-label" for="registerCheck">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck"
                                aria-describedby="registerCheckHelpText" />
                                I have read and agree to the terms
                            </label>
                            </div>
                    
                            <!-- Submit button -->
                          
                            <input type="submit" class="btn btn-success btn-block mb-3"  name="signup" value="Sign in">

                            <!-- login button -->
                            <div class="text-center">
                                <p>Already have an account? <a href="?page=/login">login</a></p>
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