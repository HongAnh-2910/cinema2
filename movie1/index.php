 

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="#">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Codystar&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans&display=swap" rel="stylesheet">

  <title>Online Movie Tickets Management System</title>

  <!-- Bootstrap core CSS -->
  <!-- <link href="./movie_files/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://bootswatch.com/flatly/bootstrap.css" rel="stylesheet">
  <link href="http://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="js/ie-emulation-modes-warning.js"></script>


  <!-- Custom styles for this template -->
<link href="../css/myCSS.css" rel="stylesheet">
  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/styleindex.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
</head>
<!-- NAVBAR
  ================================================== -->
  <body >
      

        <nav class="navbar navbar-default navbar-static-top" >
          <div class="container" >
            <div class="navbar-header" >
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php" ><img src="images/logo.png"  alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse float-right" >
              <ul class="nav navbar-nav">
                <li class="active" >
                  <a href="index.php" >Trang chủ</a>
                </li>
                <li  >
                  <a href="about.php" >Giới thiệu</a>
                </li>
                <li  >
                  <a href="addMovie.php" >Phim</a>
                </li>
                <li  >
                  <a href="index.php" >Khuyến mãi</a>
                </li>
                
              </ul>
              <ul class="nav navbar-nav navbar-right">
               
                <li><a id="glyphi" href="javascript:void(0)" onclick="openLoginModal();"><span class="  glyphicon glyphicon-user"></span> Login </a></li>
              </ul>
            </div>
            
          </div>
        </nav>

      </div>
    </div>


    <?php include 'carousel.php'; 
    include_once 'controller/showing_c.php';
              $movie = new Movie_c();
              $movie->movie(); 
    ?>

   
    

    <div class="container" >
 <div id="carousel-id" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-id" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-id" data-slide-to="1" class=""></li>
            <li data-target="#carousel-id" data-slide-to="2" class=""></li>
            <li data-target="#carousel-id" data-slide-to="3" class=""></li>
          </ol>
          <div class="carousel-inner">
            <div class="item active">
              <img alt="First slide" src="https://www.cgv.vn/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/q/u/qua_tang_980x448.jpg" style="width: 100%;">
            </div>
            <div class="item">
              <img alt="First slide" src="https://www.cgv.vn/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/c/g/cgv-brand-team-phim-hay-thang-12-980x448.jpg" style="width: 100%;">
            </div>
            <div class="item">
              <img alt="First slide" src="https://www.cgv.vn/media/banner/cache/1/b58515f018eb873dafa430b6f9ae0c1e/q/u/qua_tang_980x448.jpg" style="width: 100%;">
            </div>
            <div class="item ">
              <img alt="First slide" src="images/christmas.png" style="width: 100%;">
            </div>
          </div>

          <a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
          <a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div>
      </div>
</div>

    <div class="modal fade login" id="loginModal">
      <div class="modal-dialog login animated">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h4 class="modal-title">Login</h4>
          </div>

          <!-- login -->
          <div class="modal-body">  
            <div class="box">
              <div class="content">

                <div class="error"></div>


                <div class="form loginBox">
                  <form method="post" action="index.php" accept-charset="UTF-8">
                    <input id="userName" class="form-control" type="text" placeholder="Username" name="Username">
                    <input id="password" class="form-control" type="password" placeholder="Password" name="password">
                    <input class="btn btn-default btn-login" type="button" value="Login" onclick="loginAjax()">
                  </form>
                </div>
              </div>
            </div>

            <!-- Registration -->

            <div class="box" id="RegistrationBox">
              <div class="content registerBox" style="display:none;">
                <div class="form">
                  <form method="post" html="{:multipart=>true}" data-remote="true" action="index.php" accept-charset="UTF-8">
                    <input id="registrationName" class="form-control" type="text" placeholder="username" name="username">
                    <input id="registrationPassword" class="form-control" type="password" placeholder="Password" name="password">
                    <input id="registrationPassword_confirmation" class="form-control" type="password" placeholder="Repeat Password" name="password_confirmation">
                    <input class="btn btn-default btn-register" type="submit" value="Create account" name="commit" onclick=" RegistrationAjax(event)">
                  </form>
                </div>


              </div>
            </div>
          </div>
          <div class="modal-footer">
            <div class="forgot login-footer">
              <span>Looking to 
                <a href="javascript: showRegisterForm();">create an account</a>
                ?</span>
              </div>
              <div class="forgot register-footer" style="display:none">
                <span>Already have an account?</span>
                <a href="javascript: showLoginForm();">Login</a>
              </div>
            </div>        
          </div>
        </div>
      </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="js/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
    <script src="js/main.js"></script>
    <?php include 'footer.php'; ?>
  </body>
  </html>