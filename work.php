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
		<div class="wrapper__inner">

			<div class="wrap__header">
				<?php include 'templates/header.php' ?>
			</div>

			<div class="main">
				<?php include 'templates/aside.php' ?>

				<div class="content">
					<section class="portfolio">
						<h2 class="h2"><span class="decor">Мои работы</span></h2>
						<div class="list">
							<div class="list__item">
								<div class="thumbnail">
							      <div class="thumbnail__photo">
							      	<a class="thumbnail__project" href="http://www.spletnik.ru/">
								      	<img src="img/spletnik.jpg" height="130" width="178" alt="" />
								      	<span class="thumbnail__shadow"></span>
								      	<span class="thumbnail__name">SPLETNIK</span>
								      </a>
							      </div>
							      <div class="thumbnail__caption">
							        <h3 class="thumbnail__title">
							        	<a class="thumbnail__link" href="http://www.spletnik.ru/">www.spletnik.ru</a>
							        </h3>
							        <p class="thumbnail__txt">SPLETNIK — лидер среди обозревателей светской жизни в Рунете.</p>
							      </div>
							    </div>
							</div>
							<div class="list__item">
								<div class="thumbnail">
							      <div class="thumbnail__photo">
							      	<a class="thumbnail__project" href="http://www.buro247.ru/">
								      	<img src="img/buro247.jpg" height="130" width="178" alt="" />
								      	<span class="thumbnail__shadow"></span>
								      	<span class="thumbnail__name">Buro247</span>
								      </a>
							      </div>
							      <div class="thumbnail__caption">
							        <h3 class="thumbnail__title">
							        	<a class="thumbnail__link" href="http://www.buro247.ru/">www.buro247.ru</a>
							        </h3>
							        <p class="thumbnail__txt">Buro247 - быстро развивающийся интернет-проект как у нас, так и за рубежом</p>
							      </div>
							    </div>
							</div>
							<div class="list__item no_mgr">
								<div class="thumbnail">
							      <div class="thumbnail__photo">
							      	<a class="thumbnail__project" href="http://www.krokha.ru/">
								      	<img src="img/krokha.jpg" height="130" width="178" alt="" />
								      	<span class="thumbnail__shadow"></span>
								      	<span class="thumbnail__name">Кроха</span>
								      	<span class="thumbnail_shadow"></span>
								      </a>
							      </div>
							      <div class="thumbnail__caption">
							        <h3 class="thumbnail__title">
							        	<a class="thumbnail__link" href="http://www.krokha.ru/">www.krokha.ru</a>
							        </h3>
							        <p class="thumbnail__txt">Krokha - cайт для будущих мам и молодых родителей</p>
							      </div>
							    </div>
							</div>
						</div>

						<div class="list">
							<li class="list__item">
								<a class="add_project" for="add_proj" href="#">
									<span class="icon add_project__icon"></span>
									<span class="add_project__txt">Добавить проект</span>
								</a>
							</li>
						</div>
					</section>



				</div>


			</div>
		
		</div>
		<div class="wrap__footer">
			<footer>
				<?php include 'templates/footer.php' ?>
			</footer>	
		</div>
	</div>

	<div class="wrap__popup popup_project hide">
		<div class="popup">
			<h2 class="h2">Добавление проекта</h2>
			<form class="form__data" name="registration" method="post" action="/">
				<div class="form__row">
					<div class="form__col_l active">
						<label for="name_project">Название проекта</label>
			       
						<input type="text" name="name_project" id="name_project" value="" tabindex="1" required="true"  placeholder="Введите название"/>

						<span class="error">введите название</span>

					</div>

					<div class="form__col_l active">
						<span class="img__txt">Картинка проекта</span>
						<span class="img__input">Загрузите изображение</span>
						<label class="icon img__project" for="img_project">
							<input class="img__file" type="file" name="img_project" id="img_project" value="" tabindex="2" required="true" />
						</label>

						

						<span class="error">изображение</span>
					</div>

					<div class="form__col_l active">
						<label for="url_project">URL проекта</label>

						<input type="text" name="url_project" id="url_project" value="" tabindex="3" required="true"  placeholder="Добавьте ссылку"/>

						<span class="error">ссылка на проект</span>
					</div>

					<div class="form__col_l active">
						<label for="descr_project">Описание</label>

						<textarea name="descr_project" id="descr_project" cols="10" rows="10" placeholder="Пара слов о Вашем проекте"></textarea>

						<span class="error">изображение</span>
					</div>
					
				</div>					

			    <div class="form__regist">
					<input type="submit" name="submit" id="submit" value="Добавить" />
			    </div>

			</form>
			<span class="icon exite"></span>
		</div>
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/prefixfree.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

