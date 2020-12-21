<link href="../css/myCSS.css" rel="stylesheet">
<div class="container container-film" >
 	
 	<div class="panel with-nav-tabs panel-diff" background-image: url(../uploadimages/back.jpeg); border:none;min-height:700px; >
 		<div class="row text-center title-page" style="min-height: 80px;
			margin: 20px 0px;">
			<h1 style="font-family: 'Codystar', cursive;color: #ffd6cc;text-shadow: 45px 25px 5px grey"><b>~COMING SOON~</b></h1>
		</div>
				<style>
		h1{
			font-size: 55px;
		}

		
		.title-page{
			min-height: 80px;
			margin: 20px 0px;
		}

		.navbar{
			text-align: center;
			width: 100%; 
			margin: 0px;
		} 

		.navbar-item{ 
			float: left;
			width: 25%;	
			min-height: 180px;
			position: relative;
		}

		.images{		/*	display: block;*/
			padding: 10%;

		}

		.movie{
			position: absolute;
			width: 100%;
			height: 90%;
			bottom: -15%;
			margin: auto;
			opacity: 0;

		}
		.movie:hover{
			opacity: 1;
		}
		
		button{
			text-transform: uppercase;
			font-family: 'Balsamiq Sans', cursive;
			margin-top: 100%;

		}
		

		@media (max-width: 359px){
			.images{
				height: 130px;
			}		
		}	

		@media (min-width: 360px){
			.images{
				height: 180px;
			}			
		}	

		@media (min-width: 760px){
			.images {
				height: 260px;
			}			
		}		

		@media (min-width: 1024px){
			.images{
				height: 400px;
			}			
		}

		.carousel-control{
			width: 40px;
			height: 40px;
			margin-top: 150px
		}
	</style>
</head>


		
		<div class='row slide'>
			<div id='carousel-id1' class='carousel slide' data-ride='carousel'>

				<div class='carousel-inner'>
					<div class='item active navbar row poster-play ' style="background-color: unset">
					<?php 
					$count=0;
					foreach ($film as $value) {
					if ($count==4) {
              		echo "</div><div class='item navbar row poster-play' style='background-color: unset'>";
              		$count=0;
            }	
					echo"
						<div class='navbar-item'>
							<img class='images' src='uploadimages/".$value['poster']."'>
							<div class='movie'>
								<button class='trailer btn btn-warning' style='color:white; border: 2px ridge white;font-size:20px;font-family:fangsong;'>".$value['name']."</button> 
							</div>						
						</div>
						
						
				";
				$count++;
			}
			 ?>
			 </div>
				</div>
			
					<a class='left carousel-control' href='#carousel-id1' data-slide='prev'><span class='glyphicon glyphicon-chevron-left'></span></a>
					<a class='right carousel-control' href='#carousel-id1' data-slide='next'><span class='glyphicon glyphicon-chevron-right'></span></a>
		</div> 
	</div>
			
		

 	</div>
</div>