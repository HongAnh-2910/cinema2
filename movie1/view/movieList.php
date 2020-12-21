


  <!-- Custom styles for this template -->
  <link href="css/rotating-card.css" rel="stylesheet">
  <link href="css/stylemovieList.css" rel="stylesheet">
  <link href="css/anotherDefault.css" rel="stylesheet">
</head>
<body>

 <div class="container container-film" >
 	<h3>~ PHIM ĐANG CHIẾU ~</h3>
  <hr>
  <div class="panel with-nav-tabs panel-success" >
    <?php  
    $count=0;
    foreach ($rs as $value) {
    if ($count==4) {
              echo "<div class='row' style='margin-right:0px;margin-left:0px;'>";
              $count=0;
            }

            echo " 
            <div class='col-md-3 col-sm-6' style='margin-top:50px;'>
              <div class='card-container' style='height:450px;'>
                <div class='card'>
                  <div class='front' style='height:450px;'>
                    <div class='cover'>
                      <img src='uploadimages/".$value['poster']."'/> 
                    </div>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='name'>".$value['name'] ."</h4>

                        <p><b>Đối tượng: </b>".$value['rate']."</p>

                        <p class='profession'><b>Diễn viên: </b>".$value['actors'] ."</p>

                        <p class='profession'><b>Đạo diễn: </b> " .$value['director'] ."</p>
                        

                      </div>
                    </div> <!-- end content -->
                  </div> <!-- end front -->
                  <!-- end front panel -->
                  <div class='back' style='height:450px;'>
                    <div class='content'>
                      <div class='main'>
                        <h4 class='text-center'>".$value['timeLength'] ."</h4>
                        <p class='text-center'>".$value['description'] ." </p>
                      </div>
                      <div style='margin-top: 10vw;' class='buy_ticket'>
                        <a <a href='javascript:void(0)' onclick='openLoginModal();' class='btn btn-warning btn-block'>Đặt vé</a>
                      </div>
                    </div>
                  </div> <!-- end card -->
                </div> <!-- end card-container -->
              </div>
            </div>";

            $count++;
          }
           ?>

  
?>
</div>
</div>

</body>
</html>