<?php
require_once '../core/init.php';

if(Input::exists()){
    echo Input::get('image');
//    $user = DB::getInstance()->insert('tbl_rest_registration', array(
//        'PHOTOS'              =>  Input::get('image')
//
//    ));
}
echo Input::get('image');
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Maginhawa Restaurant Finder Portal</title>
    <!-- Bootstrap Core CSS -->
    <link href="../responsivetools/sbadmin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="../responsivetools/sbadmin/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="../responsivetools/sbadmin/dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link href="../responsivetools/sbadmin/vendor/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="../responsivetools/sbadmin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

<style>
        img.postedimage
        {
            height: 200px;
            width: 200px;
            border:0.5px solid rgba(100,100,100,0.5);
            padding:5px;
            margin:5px;
            margin-left:0px;
        }
        div.mypanel-footer
        {
            background-color: white;
        }
        div.panel-body
        {

        }
        div.row, #page-wrapper
        {
             background-color: whitesmoke;
        }
        div#wrapper, #side-menu
        {
            background-color: white;
        }
        nav#mynavbar-top
        {
            background-color: rgb(44,62,80);
        }
        a#mynavbar-brand
        {
            color:white;
        }
        div.mymodalheader1
        {
            background-color: rgb(24,188,156);
            color: white;
        }
       
   
    </style>

</head>

<body>

    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" id="mynavbar-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="mynavbar-brand" href="index.html">Maginhawa Restaurant Finder Portal</a>
            </div>
            <ul class="nav navbar-top-links navbar-right">
            
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="userprofile.html"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="accountsettings.html"><i class="fa fa-gear fa-fw"></i>Account Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <img src="../img/cautionhot.jpg" height="200" width="200">
                                <h3>CAUTION HOT</h3>
                            </div>
                        </li>
                        <!-- Home Level -->
                        <li>
                            <a href="index.html"><i class="glyphicon glyphicon-home"></i> Home</a>
                        </li>
                        <!-- History Level -->
                        <li>
                            <a href="history.html"><i class="glyphicon glyphicon-info-sign"></i> History</a>
                        </li>
                        <!-- Food level -->
                        <li>
                            <a href="#"><i class="glyphicon glyphicon-cutlery"></i> Food<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="delicacy.html">List of Delicacies</a>
                                </li>
                                <li>
                                    <a href="bestseller.html">Best Seller</a>
                                </li>
                            </ul>
                        </li>
                        <!-- Location Level -->
                        <li>
                            <a href="location.html"><i class="glyphicon glyphicon-map-marker"></i> Location</a>
                        </li>
                        <!-- Capacity Level -->
                        <li>
                            <a href="capacity.html"><i class="glyphicon glyphicon-glass"></i> Capacity</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h3>What's new?</h3>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-8">
                        <form action="../pages/form_process.php" method="post" multipart="" enctype="multipart/form-data">
                            <div class="form-group">
                                <textarea class="form-control"></textarea>
                            </div>
<!--                            <button type="button" class="btn btn-outline btn-info btn-sm">Add Image</button>-->
                            <input type="file" name="img[]" class="form-control" multiple>
                           <!--  &nbsp;&nbsp;&nbsp;&nbsp; -->
                            <button type="submit" class="btn btn-outline btn-success btn-sm">Post It</button>
                        </form>
                       
                    </div>
                </div>
                <hr>
            <div class="row">
                <div class="col-lg-8">
                    <!-- Whole body of post -->
                    <div class="panel panel-default">
                        <!-- Dropdown button for edit and delete post -->
                         <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                   <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li  data-toggle="modal" data-target="#myModal"><a href="#" ><i class="glyphicon glyphicon-pencil"></i> Edit Post</a>
                                    </li>
                                    <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Delete Post</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                <img src="../img/caution1.jpg" class="postedimage">
                                <img src="../img/caution2.jpg" class="postedimage">
                                <img src="../img/caution3.jpg" class="postedimage">
                                <img src="../img/caution4.jpg" class="postedimage">
                        </div>
                    </div>
                     <!-- Whole body of post -->
                    <div class="panel panel-default">
                        <!-- Dropdown button for edit and delete post -->
                         <ul class="nav navbar-top-links navbar-right">
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                   <i class="fa fa-caret-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-user">
                                    <li  data-toggle="modal" data-target="#myModal"><a href="#"><i class="glyphicon glyphicon-pencil"></i>  Edit Post</a>
                                    </li>
                                    <li><a href="#"><i class="glyphicon glyphicon-trash"></i> Delete Post</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <div class="panel-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p>
                                <img src="../img/table.png" class="postedimage">
                                <img src="../img/table.png" class="postedimage">
                                <img src="../img/table.png" class="postedimage">
                                <img src="../img/table.png" class="postedimage">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="container">
      <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
          <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header mymodalheader1">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">Edit Post</h4>
            </div>
            <div class="modal-body">
              <textarea class="form-control"></textarea>
              <br/>
              <button type="button" class="btn btn-outline btn-info btn-sm">Change Photo</button>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline btn-success" data-dismiss="modal">Save</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="../responsivetools/sbadmin/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/metisMenu/metisMenu.min.js"></script>
    <!-- Morris Charts JavaScript -->
    <script src="../responsivetools/sbadmin/vendor/raphael/raphael.min.js"></script>
    <script src="../responsivetools/sbadmin/vendor/morrisjs/morris.min.js"></script>
    <script src="../responsivetools/sbadmin/data/morris-data.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="../responsivetools/sbadmin/dist/js/sb-admin-2.js"></script>
    <script type="text/javascript">
        $(document).ready(function(){
           $('form').submit(function(){
               var formdata = new FormData(this);
               $.ajax({
                   
                   type:'POST',
                   url:'../pages/form_process.php',
                   data: formdata,
                   cache:false,
                   contentType:false,
                   processData:false
                   
               }).done(function(data){
                   console.log(data);
               });
               
               return false;
           });
               
           
        });
    </script>
</body>

</html>
