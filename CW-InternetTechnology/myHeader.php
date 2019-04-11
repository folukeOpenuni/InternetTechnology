<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Steamin's Mug cafe</title>

        <!-- Bootstrap core CSS -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

        <!-- Custom fonts for this template -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="css/business-casual.min.css" rel="stylesheet">

        <!--My style sheet-->
        <link href="css/style.css" rel="stylesheet" type="text/css" >

        <!--my javascript-->
        <script src="js/script.js"></script>
        
        <!--google icon-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <!--google font-->
        <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

        <!--link to font awesome-->
        <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

        <style>
            .add-pad {
                padding-bottom: 20px;
                padding-top: 20px;
            }
            .add-pad-footer{
                padding-top: 50px;
            }
            .form-elegant .font-small {
                font-size: 0.8rem; }

            .form-elegant .z-depth-1a {
                -webkit-box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25);
                box-shadow: 0 2px 5px 0 rgba(55, 161, 255, 0.26), 0 4px 12px 0 rgba(121, 155, 254, 0.25); 
                background-image: linear-gradient(260deg, #2376ae 0%, #c16ecf 100%);
            }

            .form-elegant .z-depth-1-half,
            .form-elegant .btn:hover {
                -webkit-box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15);
                box-shadow: 0 5px 11px 0 rgba(85, 182, 255, 0.28), 0 4px 15px 0 rgba(36, 133, 255, 0.15); }

            .form-elegant .modal-header {
                border-bottom: none; }

            .modal-dialog .form-elegant .btn .fab {
                color: #2196f3!important; }

            .form-elegant .modal-body, .form-elegant .modal-footer {
                font-weight: 400; }

        </style>

    </head>
    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark py-lg-4" id="mainNav">
            <div class="container-fluid add-pad">
                <!--                <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Login/Signup</a>-->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="index.php">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="products.php">Coffee</a>
                        </li>
                        <li class="nav-item  px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="#">Gift Box</a>
                        </li>
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="store.php">store</a>
                        </li>

                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="#">About</a>
                        </li>


                        <!--Modal for login or to signup. This gives a popup box-->
                        <div class="text-center">
                            <a href="" class="btn btn-primary btn-rounded text-uppercase" data-toggle="modal" data-target="#elegantModalForm">LogIn/SignUP</a>
                        </div>
                    </ul>
                    <!--search box-->
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                    <!--End of Search form-->
                </div>
            </div>
        </nav>


        <!--Login or SignUp form-->
        <form  action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- Modal -->
            <div class="modal fade" id="elegantModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" <!--id= "modalLRForm"-->
                 aria-hidden="true">
                 <div class="modal-dialog" role="document"> <!--Differences  => cascading-modal -->
                    <!--Content-->
                    <div class="modal-content form-elegant"> 
                        <!--Header-->
                        <div class="modal-header text-center">
                            <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign in</strong></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body mx-4">
                            <!--Body-->
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="Form-username">Your username</label>
                                <input type="text" name="username" placeholder="username" id="Form-username" class="form-control" autofocus required>

                            </div>

                            <div class="md-form pb-3">
                                <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                                <input type="password" name="pwd" placeholder="enter your password" id="Form-pass1" class="form-control" autofocus required>

                                <p class="font-small blue-text d-flex justify-content-end">Forgot <a href="#" class="blue-text ml-1">
                                        Password?</a></p>
                            </div>

                            <div class="text-center mb-3">
                                <button type="submit" name="signIn" class="btn  btn-block btn-rounded z-depth-1a" id="btn_login">Sign in</button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer mx-5 pt-3 mb-1">
                            <p class="font-small grey-text d-flex justify-content-end">Not a member? 
                                <!--                                <a href="" class="blue-text ml-1"></a>-->
                                <a href="" class="blue-text ml-1" data-toggle="modal" data-target="#ModalForm">SignUP</a>

                            </p>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Modal -->


        </form>


        <!--SignUp form-->
        <form  action="" method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- Modal -->
            <div class="modal fade" id="ModalForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" <!--id= "modalLRForm"-->
                 aria-hidden="true">
                 <div class="modal-dialog" role="document"> <!--Differences  => cascading-modal -->
                    <!--Content-->
                    <div class="modal-content form-elegant"> 
                        <!--Header-->
                        <div class="modal-header text-center">
                            <h3 class="modal-title w-100 dark-grey-text font-weight-bold my-3" id="myModalLabel"><strong>Sign UP</strong></h3>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <!--Body-->
                        <div class="modal-body mx-4">
                            <!--Body-->
                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="Form-name">first name</label>
                                <input type="text" name="forename" placeholder="forename" id="Form-name" class="form-control" autofocus required>
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="Form-name">surname</label>
                                <input type="text" name="surname" placeholder="surname" id="Form-name" class="form-control" autofocus required>
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="Form-name">username</label>
                                <input type="text" name="username" placeholder="username" id="Form-name" class="form-control" autofocus required>
                            </div>

                            <div class="md-form mb-5">
                                <label data-error="wrong" data-success="right" for="Form-email1">Your email</label>
                                <input type="text" name="email" placeholder="email" id="Form-email1" class="form-control" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" autofocus required>

                            </div>

                            <div class="md-form pb-3">
                                <label data-error="wrong" data-success="right" for="Form-pass1">Your password</label>
                                <input type="password" name="pwd" placeholder="enter your password" id="Form-pass1" class="form-control" autofocus required>                             
                            </div>

                            <div class="text-center mb-3">
                                <button type="submit" name="signUP" class="btn  btn-block btn-rounded z-depth-1a" id="btn_login">Sign in</button>
                            </div>

                        </div>
                        <!--Footer-->
                        <div class="modal-footer mx-5 pt-3 mb-1">
                            <p class="font-small grey-text d-flex justify-content-end">already a member? 
                                <!--                                <a href="" class="blue-text ml-1"></a>-->
                                <a href="" class="blue-text ml-1" data-toggle="modal" data-target="#ModalForm">Sign in</a>

                            </p>
                        </div>
                    </div>
                    <!--/.Content-->
                </div>
            </div>
            <!-- Modal -->
        </form>

        <?php
        if (isset($_POST["signIn"])) {
            //include("model/DB.php");
             include 'model/Users.php';
            
            Users::authenticate();
//            $db = new mysqli($hostname, $username, $password, $dbname);
//
//            if ($_SERVER["REQUEST_METHOD"] == "POST") {
//                // username and password sent from form 
//
//                $myusername = mysqli_real_escape_string($db, $_POST['username']);
//                $mypassword = mysqli_real_escape_string($db, $_POST['pwd']);
//
//                $sql = "SELECT * FROM login WHERE username = '$myusername' and password = '$mypassword'";
//                $result = mysqli_query($db, $sql);
//                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
//                $active = $row['active'];
//
//                $count = mysqli_num_rows($result);
//
//                // If result matched $myusername and $mypassword, table row must be 1 row
//
//                if ($count == 1) {
//                    session_register("myusername");
//                    $_SESSION['login_user'] = $myusername;
//
//                    header("location: profile.php");
//                } else {
//                    $error = "Your Login Name or Password is invalid";
//                    return $error;
//                }
//            }
        }

        if (isset($_POST["signUP"])) {
            include 'model/User.php';
            User::signup();
        }
//        else{
//            echo 'Please fill in the form';
//        }
        ?>