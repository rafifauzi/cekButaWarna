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

        <title>Home</title>

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
            .text{
                color: #000;
                font-size: 12pt;
                text-align: justify;
                border-bottom: 2px solid #e5e5e5;
            }
            .img{
                width: 400px;
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
                .img{
                width: 120px;
                }
                .text{
                    font-size: 10pt;
                }
                footer{
                    font-size: 10px;
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
                            <li class="active">
                                <a href="home.php"><i class="zmdi zmdi-view-dashboard"></i> <span> Dashboard</span> </a>
                            </li>

                            <li class="has-submenu">
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

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <h3>Buta Warna</h3>
                            <div class="text">
                                <center>
                                    <img src="assets/images/pictures/eye1.jpg" class="img img-thumbnail img-responsive">
                                </center>
                                <p>Buta warna adalah penglihatan warna-warna yang tidak sempurna. Buta warna juga dapat diartikan sebagai suatu kelainan penglihatan yang disebabkan ketidakmampuan sel-sel kerucut (cone cell) pada retina mata untuk menangkap suatu spektrum warna tertentu sehingga objek yang terlihat bukan warna yang sesungguhnya (Nina Karina, 2007).</p>
                            </div>
                            <h3>Penyebab Buta Warna</h3>
                            <div class="text">
                                <p>Pada umumnya, terjadinya buta warna disebabkan oleh adanya reseptor warna dalam retina mata yang kurang berfungsi secara normal (mal function). Pada dasarnya, di dalam retina mata kita terdapat tiga tipe atau jenis reseptor warna, yaitu merah, biru, dan hijau. Anomali warna terjadi sebagai hasil akibat kekurangan satu atau lebih dari reseptor warna tersebut (Andra, 2010).</p>
                                <p>
                                Buta warna adalah kondisi yang diturunkan secara genetik. Dibawa oleh kromosom X pada perempuan, buta warna diturunkan kepada anak-anaknya. Ketika seseorang mengalami buta warna, mata mereka tidak mampu menghasilkan keseluruhan pigmen yang dibutuhkan untuk mata berfungsi dengan normal (Anonymous, 2011).</p>
                                <p>
                                Penyebab lain buta warna adalah karena didapat. Hal ini biasanya terjadi ketika anak mengalami kerusakan retina atau cedera (trauma) pada otak yang menyebabkan pembengkakan di lobus occipital. Kerusakan akibat paparan sinar ultraviolet karena tidak menggunakan pelindung mata secara benar juga bisa menyebabkan buta warna (Anonymous, 2009).</p>
                            </div>
                            <h3>Pengetesan Buta Warna</h3>
                            <div class="text">
                            <h4>Pengetesan Ishihara</h4>
                            <center>
                                <img src="assets/images/test-isihira/test22.jpg" class="img img-thumbnail img-responsive">
                            </center>
                                <p>Menurut Guyton (1997), metode Ishibara yaitu metode yang dapat dipakai untuk menentukan dengan cepat suatu kelainan buta warna didasarkan pada penggunaan kartu bertitik-titik. Kartu ini disusun dengan menyatukan titik-titik yang mempunyai bermacam-macam. Pada gambar diatas orang normal akan melihat angka “42”.</p>
                           
                            <h4>Pengetesan Farnsworth Munsell</h4>
                            <center>
                                <img src="assets/images/pictures/munsell.jpg" class="img img-thumbnail img-responsive" style="width: 800px;">
                            </center>
                                <p>Pengujian tes Farnsworth Munsell ini pun tidaklah sulit. Pasien diminta untuk menghafal urutan-urutan warna pada koin-koin yang sudah disiapkan. Lalu melakukan acak warna pada koin-koin warna tersebut. Setelah koin-koin warna tersebut diacak, maka pasien diminta untuk mengurutkan kembali warna-warna yang ada. Setelah selesai, maka kita bisa mencocokkan urutan warna yang telah disusun kembali oleh pasien.</p>
                                <p>
                            
                            </div>
                        </div>
                    </div><!-- end col -->

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