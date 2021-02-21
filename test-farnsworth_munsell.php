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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
  <meta name="author" content="Coderthemes">

  <link rel="shortcut icon" href="assets/images/favicon.ico">

  <title>Test Farnsworth Munsell</title>
  <link rel="stylesheet" href="assets/plugins/morris/morris.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css" />
  <script src="assets/js/modernizr.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/jquery.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.9.2/jquery-ui.js"></script>
  <script type="text/javascript" src="http://www.pureexample.com/js/lib/jquery.ui.touch-punch.min.js"></script>

  <!-- CSS -->
  <style type="text/css">
  .test{
      overflow: hidden;
      position: relative;
      margin:auto 12% auto 14%;
      -webkit-touch-callout: none; /* iOS Safari */
      -webkit-user-select: none; /* Safari */
      -khtml-user-select: none; /* Konqueror HTML */
      -moz-user-select: none; /* Firefox */
      -ms-user-select: none; /* Internet Explorer/Edge */
      user-select: none;
  }
  .list {
      background-color: #e5e5e5;
      font-size: 30px;
      text-align: center;
      cursor: pointer;
  }
  .table-test{
    width: 840px;
  }
  .color1{    
    background-color: #3482c2;
    color: #3482c2;
  }
  .color2{    
    background-color: #3583b4;
    color: #3583b4;
  }
  .color3{    
    background-color: #3c85a8;
    color: #3c85a8;
  }
  .color4{    
    background-color: #38869c;
    color: #38869c;
  }
  .color5{    
    background-color: #3c8691;
    color: #3c8691;
  }
  .color6{    
    background-color: #3d8883;
    color: #3d8883;
  }
  .color7{    
    background-color: #568573;
    color: #568573;
  }
  .color8{    
    background-color: #698063;
    color: #698063;
  }
  .color9{    
    background-color: #827b5e;
    color: #827b5e;
  }
  .color10{    
    background-color: #90765f;
    color: #90765f;
  }
  .color11{    
    background-color: #9e6e6e;
    color: #9e6e6e;
  }
  .color12{    
    background-color: #a06d7c;
    color: #a06d7c;
  }
  .color13{    
    background-color: #a06d7c;
    color: #a06d7c;
  }
  .color14{    
    background-color: #93709a;
    color: #93709a;
  }
  .color15{    
    background-color: #906fa4;
    color: #906fa4;
  }
  .color16{    
    background-color: #7f73b1;
    color: #7f73b1;
  }
  #items .ui-selected {
      background: #e5e5e5;
      color: white;
  }   
  #items {
      list-style-type: none;
      margin: 0;
      padding: 0;
  }   
  #items li, .test span {
      float: left;
      margin: 2px;
      padding: 2px;
      width: 48px;
      height: 48px;
      line-height: 48px;
  }
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
    #items li, .test span {
      float: left;
      margin: 2px;
      padding: 2px;
      width: 30px;
      height: 30px;
      line-height: 48px;
    }
    .test{
      width: 300px;
      margin-left: 3%;
    }
    .table-test{
      width: 300px;
    }
    .list, .card-box h4{
      font-size: 14px;
    }
    footer{
      font-size: 10px;
    }
  }
  </style>
   
  <!-- Javascript -->
  <script>
  var list = ["2","3","4","5","6","7","8","9","10","11","12","13","14","15"];
  $(function () {
    var sfl = [].concat(list);
  
    function checkIt() {
        var sortstr = "";
        $(".list").each(function (index) {
          sortstr += $(this).text();
        });
        if (sortstr == list.join("")) {
          alert("sorted!");
        }
      }

    function testStart(){
      alert('a');
    }

    function shuffle(array) {
      var n = array.length,
        k, t;
      if (n == 0) {
        return false
      };
      while (--n) {
        k = Math.floor(Math.random() * (n + 1));
        t = array[n];
        array[n] = array[k];
        array[k] = t;
      }
    }

    shuffle(sfl);

    $.each(sfl, function (idx, it) {
      $("#items").html($("#items").html() + '<li class="list color'+it+'">' + it + '</li>')
    });
  
    checkIt();
    $("#items").sortable({
      placeholder: "list",
      stop: checkIt
    });
    $("#items").disableSelection();
    });

  $(function () {
    $("#items").sortable({
    placeholder: "highlight",
      start: function (event, ui) {
        ui.item.toggleClass("highlight");
      },
      stop: function (event, ui) {
        ui.item.toggleClass("highlight");
      }
    });
     $("#items").disableSelection();
  });

    
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
                            <li class="has-submenu ">
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
                    <div class="col-sm-2">
                        &nbsp;
                    </div>
                </div>

                <div class="card-box">
                    <div class="widget-chart text-center">
                      <h4>Tarik dan lepaskan warna pada baris dibawah dan urutkan sesuai urutan warna</h4>
                      <h4>Jika sudah selesai maka tekan tombol "Hitung"</h4>
                      <br>
                        <div class="test">
                          <center>
                            <table class="table-test">
                              <tr>
                                <td>
                                  <span class="list color1">1</span>
                                
                                  <ul id="items">
                                
                                  </ul>                                
                                
                                  <span class="list color16">16</span>
                                </td>
                              </tr>
                            </table>
                            
                          </center>
                      </div>
                      <br>
                      <h3><p id="benar"></p></h3>
                      <h3><p id="salah"></p></h3>
                      <br>
                      <center>
                        <button type="button" onclick="testStart()" id="hitung" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5">Mulai Test</button>
                        <button type="button" onclick="getValues()" id="hitung" class="btn btn-primary btn-rounded w-md waves-effect waves-light m-b-5">Hitung</button>
                        <input type="text" name="id" id="id" style="display: none;" value="<?=$id;?>" >
                      </center>
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
        </div>

        <!-- jQuery  -->
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/plugins/jquery-knob/jquery.knob.js"></script>
        <script src="assets/plugins/morris/morris.min.js"></script>
        <script src="assets/plugins/raphael/raphael-min.js"></script>
        <script src="assets/pages/jquery.dashboard.js"></script>
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script type="text/javascript">
          $( "#items" ).disableSelection();
          var tampung = new Array();
          window.getValues = function() {
            $.each($('#items').find('li'), function() {
                tampung.push($(this).text());          
            });
          var benar=0;
          var salah=0;
          for (i=0; i<16; i++) {      
            if (list[i]==tampung[i]) {
              benar++;
            }else{
              salah++;
            }
          }
          /**var perBenar=(benar/16)*100;**/
          var id=document.getElementById('id').value;
          var total=benar;
          $.ajax({
              url:'test-farnsworth_munsell-proses.php',
              method:'POST',
              data:{
                  id:id,
                  total:total
              },
                success:window.location.assign('page-hasil.php')
          });
          
        }
        </script>
    
</body>
</html>