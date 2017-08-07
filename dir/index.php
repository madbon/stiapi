<?php
require_once 'core/init.php';

if(Input::exists()){
    $user = DB::getInstance()->insert('tbl_rest_registration', array(
        'NAME'              =>  Input::get('Restname'),
        'OWNER'             =>  Input::get('ownername'),
        'CONTACT_INFO'      =>  Input::get('contactnumber'),
        'BLOG_WEB_URL'      =>  Input::get('blogweburl'),
        'HISTORY'           =>  Input::get('history'),
        'CAPACITY_CHAIRS'   =>  Input::get('capacityofchairs'),
        'COMP_ADDRESS'      =>  Input::get('completeaddress'),
        'LAT'               =>  Input::get('latitude'),
        'LONGI'             =>  Input::get('longitude'),
        'USERNAME'          =>  Input::get('username'),
        'PASSWORD'          =>  Input::encrptpw('password')

    ));
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Freelancer - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="responsivetools/bootstrap/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Theme CSS -->
    <link href="responsivetools/bootstrap/css/freelancer.min.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="responsivetools/bootstrap/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="responsivetools/bootstrap/css/css.css" rel="stylesheet" type="text/css">
    <link href="responsivetools/bootstrap/css/css2.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
         input.logininput
        {
            height: 20px;
            width: 200px;
            font-size: 12px;
            border-radius: 2px 2px 2px 2px;
            border:0;
            padding-left:5px;
            color:black;
            font-weight: normal;
            font-family: Lato,'Helvetica Neue',Helvetica,Arial,sans-serif;
           
        }
        button.loginbutton
        {
            height: 20px;
            width: 50px;
            font-size: 12px;
            border-radius: 2px 2px 2px 2px;
            border:0;
            padding-left:5px;
            color:white;
            font-weight: normal;
            font-family: Lato,'Helvetica Neue',Helvetica,Arial,sans-serif;
            background-color: rgb(24,188,156);
           
        }
    </style>

</head>

<body id="page-top" class="index">
<div id="skipnav"><a href="#maincontent">Skip to main content</a></div>

    <!-- Navigation -->
    <nav id="mainNav" class="navbar navbar-default navbar-fixed-top navbar-custom">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="#page-top">  
                    <input type="text" placeholder="Username" id="username" class="logininput">   
                    <input type="Password" placeholder="Password" id="password" class="logininput">
                    <button type="button" id="signin" class="loginbutton">Sign in</button>  
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li class="page-scroll">
                        <a href="#about">Home</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Sign up</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- Header -->
    <header>
        <div class="container" id="about" tabindex="-1">
            <div class="row">
                <div class="col-lg-12">
                    <img class="img-responsive" src="img/Reservation2.png" alt="">
                    <div class="intro-text">
                        <h3 class="name"> Maginhawa Restaurant Finder</h3>
                        <hr class="star-light">
                        <span class="skills">Resturant Finder - Seats Reservation - Delicacies</span>
                    </div>

                </div>

            </div>
        </div>
    </header>

    
    <!-- Registration Section  -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Tell us about your restaurant</h2>
                    <h2><small>Free sign up here</small></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <form action="" method="post">
                <div class="col-lg-5">
                    
                        <!-- Restaurant name -->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="restoname">Resturant Name</label>
                                <input type="text" class="form-control" placeholder="Resturant Name" name="restaurantname" id="name" required data-validation-required-message="Please enter your restaurant name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- Owner Name -->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="ownername">Owner Name</label>
                                <input type="text" class="form-control" placeholder="Owner Name" name="ownername" id="ownername" required data-validation-required-message="Please enter your owner name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- Contac number -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="contactnumber">Contact Number</label>
                                <input type="text" class="form-control" placeholder="Contact Number" name="contactnumber" id="contactnumber" >
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- Blog web url textbox -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="blogweburl">Blog/Website URL</label>
                                <input type="text" class="form-control" placeholder="Blog/Web URL " name="blogweburl" id="blogweburl">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- History -->
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="">History</label>
                                <textarea rows="5" class="form-control" placeholder="History" name="history" id="history"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <!-- Capacity -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="capacityofchairs">How many chairs are available in the restaurant?</label>
                                <input type="number" class="form-control" placeholder="How many chairs are available in the restaurant?" name="capacityofchairs" id="capacityofchairs" required data-validation-required-message="Please don't leave this blank">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                      
                        <br>
                       
                </div>
                <div class="col-lg-2">
                    <!-- Middle column seperator between two columns -->
                </div>
                <!-- Column two Right side-->
                <div class="col-lg-5">
                    <!-- Complete Addres -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="completeaddress">Complete Address</label>
                                <textarea rows="2" class="form-control" placeholder="Complete Address" name="completeaddress" id="completeaddress" required data-validation-required-message="Please enter the complete address of yout restaurant."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <!-- Latitude -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="latitude">Latitude</label>
                                <input type="text" class="form-control" placeholder="Latitude" name="latitude" id="latitude">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                         <!-- Longitude -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="longitude">Longitude</label>
                                <input type="text" class="form-control" placeholder="Longitude" name="longitude" id="longitude">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- Username -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" required data-validation-required-message="Please enter your username.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- Password -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" placeholder="Password" name="password" id="password" required data-validation-required-message="Please enter your password">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <!-- Confirm Password -->
                         <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label for="confirmpassword">Confirm Password</label>
                                <input type="password" class="form-control" placeholder="Confirm Password" name="confirmpassword" id="confirmpassword" required data-validation-required-message="Please re-enter your password">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br/>
                        <!--  Send Button -->
                         <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                </div>
                 </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="text-center">
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Your Website 2016
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- jQuery -->
    <script src="responsivetools/bootstrap/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="responsivetools/bootstrap/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="responsivetools/bootstrap/js/jquery.easing.min.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="responsivetools/bootstrap/js/jqBootstrapValidation.js"></script>
    <script src="responsivetools/bootstrap/js/contact_me.js"></script>
    <!-- Theme JavaScript -->
    <script src="responsivetools/bootstrap/js/freelancer.min.js"></script>


<script>
$(document).ready(function(){
    $("#signin").click(function(){
        var username = $("#username").val();
        var password = $("#password").val();

        if(username == "user" && password == "pass")
        {
            window.location.href = "pages/home.php";
        }
        else
        {
            
        }
    });
});
</script>
</body>

</html>