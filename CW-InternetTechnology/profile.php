<?php session_start(); ?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
    <body style="background-image: url('/img/coffeeCup.jpg')">

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
                            <a class="nav-link text-uppercase text-expanded" href="about.php">About</a>
                        </li>

                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="profile.php">profile</a>
                        </li>  
                        <li class="nav-item px-lg-4">
                            <a class="nav-link text-uppercase text-expanded" href="view/logout.php">logout</a>
                        </li>
<!--                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">logout</button>-->
                        
                        
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

        <?php
            if(isset($_SESSION['username'])){
                echo ' <div class="jumbotron jumbotron-fluid">
                            <div class="container">
                                <h1 class="display-4">Welcome '. $_SESSION['username']."</h1>
                                <p class='lead'></p>
                            </div>
                       </div>";
            }
        ?>
        
        <section class="page-section clearfix">
            <div class="container">
                <div class="intro">
                    <div class="intro-text left-0 text-center bg-faded p-5 rounded" style="width: 100%;">
                        <h2 class="section-heading mb-4">
                            <span class="section-heading-upper">Fresh Coffee</span>
                            <span class="section-heading-lower">Worth Drinking</span>
                        </h2>
                        <p class="mb-3">Every cup of our quality artisan coffee starts with locally sourced, hand picked ingredients. Once you try it,
                            our coffee will 
                            be a blissful addition to your everyday morning routine - we guarantee it!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <?php
       // require 'footer.php';
        