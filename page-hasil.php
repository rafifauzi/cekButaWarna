<?php 
session_start();
if(!isset($_SESSION['username'])) {
    header('location:page-login.php'); 
} else { 
   $username = $_SESSION['username']; 
   $id = $_SESSION['id']; 
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" http-equiv="refresh" >
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <title>Hasil</title>

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
            .card-pos{
                position: relative; margin:auto auto auto 15%;
            }
            .table-bordered td:hover{
                background-color: #e5e5e5;
            }
            .det-parsial{
                font-size: 10pt;
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
                .card-pos{
                    position: relative; margin:auto auto auto 0%;
                }
                footer{
                    font-size: 10px;
                }
                .det-parsial{
                    font-size: 8pt;
                }
            }
        </style>
        <script type="text/javascript">                        
            function reloadIt() {
                if (window.location.href.substr(-2) !== "?r") {
                    window.location = window.location.href + "?r";
                }
            }
            setTimeout('reloadIt()',10)();

        </script>

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

                            <li class="has-submenu">
                                <a href="#" class="active"><i class="zmdi zmdi-collection-text"></i><span> Mulai Test </span> </a>
                                <ul class="submenu">
                                    <li><a href="test-ishihara-1.php">Test Ishihara</a></li>
                                    <li><a href="test-farnsworth_munsell.php">Test Farnsworth Munsell</a></li>
                                </ul>
                            </li>

                            <li class="has-submenu active">
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


                 <div class="row card-pos">
                    <div class="col-lg-5">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                </a>
                            </div>
                            <h4 class="header-title m-t-0">Hasil Test Ishihara</h4>
                            <br>
                            <?php
                                include "database/koneksi.php";
                                $baca2=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                                $res2=mysql_fetch_array($baca2);                                
                                $persenNormal=$res2['persen_normal'];
                                $persenTotal=$res2['persen_total'];
                                $persenParsial=$res2['persen_parsial'];
                                $persenR=$res2['persen_merah'];
                                $persenG=$res2['persen_total'];
                                
                            ?>
                            <div class="widget-chart text-center">
                                <div class="widget-chart-box-1">

                                    <?PHP
                                        include "database/koneksi.php";
                                        $baca=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                                    ?>
                                    <input data-plugin="knob" data-width="200" data-height="200" data-fgColor="#2196F3" data-bgColor="#90CAF9" value="<?php echo $persenNormal;?>" 
                                    data-skin="tron" data-angleOffset="180" data-readOnly=true data-thickness=".15"/>
                                 </div>
                                <div class="widget-detail-1">
                                    <?PHP
                                        include "database/koneksi.php";
                                        $baca=mysql_query("SELECT * FROM hasil_ishihara WHERE username='$username' ");
                                    ?>
                                    <table align="center" class="table-bordered" style="margin-bottom: 10px;">
                                        <tr>
                                            <td width="80" rowspan="2" valign="top">                                                
                                                 <h3 class="p-t-10 m-b-0"><?php echo $persenNormal;?>%</h3>
                                                 <p class="text-muted">Normal</p>
                                            </td>
                                            <td width="80" rowspan="2" valign="top">                                                
                                                 <h3 class="p-t-10 m-b-0"><?php echo $persenTotal;?>%</h3>
                                                 <p class="text-muted">Total</p>
                                            </td>
                                            <td width="150" valign="top">                                                
                                                 <h3 class="p-t-10 m-b-0"><?php echo $persenParsial;?>%</h3>
                                                 <p class="text-muted">Parsial</p>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="150">
                                                 <p class="det-parsial">(<?php echo $persenG;?>% Green | 
                                                 <?php echo $persenR;?>% Red )</p>
                                            </td>
                                        </tr>
                                    </table>
                                 </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card-box">
                            <div class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle card-drop" data-toggle="dropdown"
                                   aria-expanded="false">
                                </a>
                            </div>

                            <h4 class="header-title m-t-0">Hasil Test Farnsworth Munsell</h4>

                            <?php
                                include "database/koneksi.php";
                                $baca1=mysql_query("SELECT * FROM hasil_farns WHERE username='$username' ");
                                $res=mysql_fetch_array($baca1);
                                $hasil_farns=$res['total'];
                                $sel_farns=16-$hasil_farns;
                                if ($sel_farns==0||$sel_farns<=3) {
                                    $kes_farns="Superior";
                                    $detail_farns="Melebihi kemampuan diskriminasi rata-rata populasi";
                                }elseif ($sel_farns>3||$sel_farns<=16) {
                                    $kes_farns="Average";
                                    $detail_farns="Batasan normal, sebagian besar populasi";
                                }elseif ($sel_farns>16){
                                    $kes_farns="Low";
                                    $detail_farns="kemampuan diskriminasi di bawah rata-rata";
                                }else{
                                    $kes_farns="-";
                                    $detail_farns="-";
                                }
                            ?>
                            
                            <br>
                            <div class="widget-chart text-center">
                                <div class="widget-chart-box-1">
                                     <input data-plugin="knob" data-width="200" data-height="200" data-fgColor="#9C27B0"
                                            data-bgColor="#CE93D8" value="<?=$hasil_farns;?>"
                                            data-skin="tron" data-angleOffset="180" data-readOnly=true
                                            data-thickness=".15" data-min="0" data-max="16"/>
                                 </div>
                                <div class="widget-detail-1">
                                     <h2 class="p-t-10 m-b-0"><?=$kes_farns;?></h2>
                                     <p class="text-muted"><?=$detail_farns;?></p>
                                     <br><br>
                                 </div>
                            </div>
                        </div>
                    </div>
                 </div>
                <!-- end row -->

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