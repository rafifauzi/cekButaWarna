<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header('location:page-login.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Test Ishihara Munsell</title>

        <!--Morris Chart CSS -->
		<link rel="stylesheet" href="assets/plugins/morris/morris.css">

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

        <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        <script src="assets/js/modernizr.min.js"></script>
        <style type="text/css">
            .mini-menu{
                margin:20px auto 20px auto; 
                color: #fff;
            }
            .mini-menu a{
                text-decoration: none;
                color: #fff;
                font-size: 10pt;
                padding-right: 10px;
                padding-left: 10px;
            }
            .mini-menu a:hover{
                color: #E0E0E0;
            }
            @media (max-width:480px){
                .logo {
                    font-size: 20px;
                }
                .mini-menu{
                    margin-top: 23%;
                }
                .mini-menu a{
                    font-size: 12px;
                }
            }
        </style>

    </head>


    <body>

        <!-- Navigation Bar-->
        <header id="topnav">
            <div class="topbar-main">
                <div class="container">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="home.php" class="logo"><span>Diagnosa<span>Buta Warna</span></span></a>
                    </div>
                    <!-- End Logo container-->


                    <div class="menu-extras">
                        <div class="menu-item">
                            <!-- Mobile menu toggle-->
                            <a class="navbar-toggle">
                                <div class="lines">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </a>
                            <!-- End mobile menu toggle-->
                        </div>
                        <ul class="nav navbar-nav navbar-right pull-right">
                            <li class="user-box form-inline">
                              <div class="mini-menu">
                                <a href="proses_logout.php">Logout</a>|<a href="#"><?=$username;?></a>
                              </div>                                  
                            </li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="navbar-custom">
                <div class="container">
                    <div id="navigation">
                        <!-- Navigation Menu-->
                        <ul class="navigation-menu" style="position: relative; margin:auto 15% auto 30%;">
                            <li class="has-submenu">
                                <a href="home.php"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard</span> </a>
                            </li>

                            <li class="has-submenu active">
                                <a href="#" class="active"><i class="zmdi zmdi-collection-text"></i><span> Mulai Test </span> </a>
                                <ul class="submenu">
                                    <li><a href="test-ishihara-1.php">Test Ishihara</a></li>
                                    <li><a href="test-farnsworth_munsell.php">Test Farnsworth Munsell</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu">
                                <a href="page-hasil.php"><i class="zmdi zmdi-chart"></i><span> Hasil Test </span> </a>
                            </li>

                            <li class="has-submenu">
                                <a href="about.php"><i class="zmdi zmdi-info"></i><span> About </span> </a>
                            </li>

                        </ul>
                        <!-- End navigation menu  -->
                    </div>
                </div>
            </div>
        </header>
        <!-- End Navigation Bar-->


        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        &nbsp;
                    </div>
                </div>

                <?PHP
                    include "database/koneksi.php";
                    $baca=mysql_query("SELECT * FROM user WHERE username='$username' ");
                ?>

                <div class="card-box">
                    <div class="widget-chart text-center">
                        <div style="height: auto;">
                            <img src="assets/images/test-isihira/test8.jpg" style="width: 260px;">
                        </div>
                        <h4>Tuliskan Apa Yang Anda Lihat <br> Jika Tidak Ada Tekan Tombol Tidak Ada</h4>
                        <form action="test-ishihara-proses.php" method="POST" name="test8">
                            <center>
                                <input type="text" class="form-control" style="width: 250px;" placeholder="Ketik Disini" name="jawaban8" autofocus>
                                <input type="hidden" class="form-control" style="width: 250px;" name="username" value="<?PHP while ($buka=mysql_fetch_array($baca)) {echo "".$buka['username'];}?>">
                            </center>

                            <ul class="list-inline chart-detail-list m-t-10">
                                <li>
                                    <button type="submit" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5" name="kirim8">OK</button>
                                </li>
                                <li>
                                    <button type="submit" class="btn btn-danger btn-rounded w-md waves-effect waves-light m-b-5" name="salah8">Tidak Ada</button>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <center>2018 © KodingKita.</center>                        
                    </div>
                </footer>
                <!-- End Footer -->
            </div>
            <!-- end container -->
        </div>



        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>

        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="assets/plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>

        <!--Morris Chart-->
		<script src="assets/plugins/morris/morris.min.js"></script>
		<script src="assets/plugins/raphael/raphael-min.js"></script>

        <!-- Dashboard init -->
        <script src="assets/pages/jquery.dashboard.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>