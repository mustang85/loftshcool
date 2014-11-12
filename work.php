<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/normalize.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="shortcut icon" type="image/icon" href="favicon.ico" />
	<!--[if IE 8]>
		<link rel="stylesheet" href="css/ie8.css" />
	<![endif]-->
	<!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
	<div class="wrapper">
		<div class="wrapper_inner">

			<div class="wrap_header">
				<?php include 'templates/header.php' ?>
			</div>

			<div class="main">
				<?php include 'templates/aside.php' ?>

				<div class="content">
					<section class="portfolio">
						<h2 class="h2"><span class="decor">Мои работы</span></h2>
						<div class="list">
							<div class="list_i">
								<div class="thumbnail">
							      <div class="thumbnail_photo">
							      	<a class="thumbnail_photo_a" href="#">
								      	<img src="img/spletnik.jpg" height="130" width="178" alt="" />
								      	<span class="thumbnail_shadow"></span>
								      	
								      	<span class="wrap">
									      	<span class="thumbnail_photo_description">
									      		<span class="txt">SPLETNIK</span>
									      	</span>
									    </span>
								      </a>
							      </div>
							      <div class="thumbnail_caption">
							        <h3 class="thumbnail_caption_t">
							        	<a class="thumbnail_caption_t_a" href="http://www.spletnik.ru/">www.spletnik.ru</a>
							        </h3>
							        <p class="thumbnail_caption_txt">SPLETNIK — лидер среди обозревателей светской жизни в Рунете.</p>
							      </div>
							    </div>
							</div>
							<div class="list_i">
								<div class="thumbnail">
							      <div class="thumbnail_photo">
							      	<a class="thumbnail_photo_a" href="#">
								      	<img src="img/buro247.jpg" height="130" width="178" alt="" />
								      	<span class="thumbnail_shadow"></span>
								      	
								      	<span class="wrap">
									      	<span class="thumbnail_photo_description">
									      		<span class="txt">Buro247</span>
									      	</span>
									    </span>
								      </a>
							      </div>
							      <div class="thumbnail_caption">
							        <h3 class="thumbnail_caption_t">
							        	<a class="thumbnail_caption_t_a" href="http://www.buro247.ru/">www.buro247.ru</a>
							        </h3>
							        <p class="thumbnail_caption_txt">Buro247 - быстро развивающийся интернет-проект как у нас, так и за рубежом</p>
							      </div>
							    </div>
							</div>
							<div class="list_i no_mgr">
								<div class="thumbnail">
							      <div class="thumbnail_photo">
								      <a class="thumbnail_photo_a" href="#">
								      	<img src="img/krokha.jpg" height="130" width="178" alt="" />
								      	<span class="thumbnail_shadow"></span>
								      	
								      	<span class="wrap">
									      	<span class="thumbnail_photo_description">
									      		<span class="txt">Кроха</span>
									      	</span>
									     </span>
								      </a>

							      </div>
							      <div class="thumbnail_caption">							      
							        <h3 class="thumbnail_caption_t">
							        	<a class="thumbnail_caption_t_a" href="http://www.krokha.ru/">www.krokha.ru</a>
							        </h3>
							        <p class="thumbnail_caption_txt">Krokha - cайт для будущих мам и молодых родителей</p>
							      </div>
							    </div>
							</div>
						</div>

						<div class="list">
							<form class="list_i">
								<label class="add_project" for="add_proj" href="#">
									
								</label>
								<input id="add_proj" type="file">
							</form>
						</div>
						<span class="cover tl"></span>
						<span class="cover tr"></span>
						<span class="cover bl"></span>
						<span class="cover br"></span>
					</section>



				</div>


			</div>
		
		</div>
		<div class="wrap_footer">
			<?php include 'templates/footer.php' ?>
		</div>
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
</body>
</html>