<!DOCTYPE html>
<html lang="en">

  <head>

    <title>TRANG CHỦ HỆ THỐNG</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://theme.hstatic.net/1000269795/1000439171/14/favicon.png?v=1149" type="image/png" />

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- NProgress -->
    <link href="css/nprogress.css" rel="stylesheet">
    
    <!-- Custom styling plus plugins -->
    <link href="css/custom.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-film"></i> <span>QUẢN LÍ RẠP </span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/icon.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Jennie</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>QUẢN TRỊ VIÊN </h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Quản lý phim <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.html">Thông tin phim</a></li>
                      <li><a href="index2.html">Lịch chiếu phim</a></li>
                      <li><a href="index3.html">Thể loại phim</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Quản lý tài khoản <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Cập nhật thông tin</a></li>
                      <li><a href="form_advanced.html">Đổi mật khẩu</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Quản lý rạp <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.html">Phòng</a></li>
                      <li><a href="form_advanced.html">Ghế ngồi</a></li>
                      
                    </ul>
                  </li>
                  <li><a><i class="fa fa-table"></i> Khuyến mãi <span class="fa fa-chevron-down"></span></a>
                    
                  </li>
                  
                </ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

             
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3> Danh sách thông tin quản trị </h3>
              </div>

             
            </div>

            <div class="clearfix"></div>

            <form class="form-inline " style="padding-bottom: 30px;padding-left: 350px;padding-top: 30px;">
            Nhập từ khoá: 
          <input class="form-control " id="ten_hang" type="text" name="ten_hang" placeholder=" Tìm kiếm " aria-label="Search">
         <button class="btn btn-outline-success phone_search " type="submit">Tìm kiếm</button>
          </form>

        <div class="table-responsive">
      <table class="table table-hover table-bordered">
        <thead>
      <tr>
        <th>ID</th>
        <th>Tên quản trị</th>
        <th>Email</th>
        <th>Password</th>
        
      </tr>
    </thead>
    <tbody id="view_data">
      
    </tbody>
  </table>
</div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="js/fastclick.js"></script>
    <!-- NProgress -->
    <script src="js/nprogress.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="js/custom.min.js"></script>
  </body>
</html>