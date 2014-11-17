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
					<section class="general_info">
						<h2 class="h2"><span class="decor">Основная информация</span></h2>
						<div class="general__photo anim__avatar">
							<img class="general__avatar" src="img/i_am.jpg" height="200" width="200" alt="" />
						</div>
						<ul class="list">
							<li class="list__item"><strong>Меня зовут: </strong> Гранев Кирилл Евгеньевич</li>
							<li class="list__item"><strong>Мой возраст:</strong> 29 лет</li>
							<li class="list__item"><strong>Мой город:</strong> г. Москва, Россия</li>
							<li class="list__item"><strong>Моя специализация:</strong> html - верстальщик</li>
							<li class="list__item list__item_layout"><strong>Ключевые навыки:</strong> 
								<div class="list__more">
									<span class="list__tag">html</span>
									<span class="list__tag">css</span>
									<span class="list__tag">html 5</span>
									<span class="list__tag">css 3</span>
									<span class="list__tag">javascript</span>
									<span class="list__tag">jQuery</span>
									<span class="list__tag">git</span>
									<span class="list__tag">gulp</span>
									<span class="list__tag">less</span>
									<span class="list__tag">lesshat</span>
									<span class="list__tag">bootstrap</span>
								</div>
							</li>
						</ul>
					</section>

					<section class="experience">
						<h2 class="h2"><span class="decor">Опыт работы</span></h2>
						<ul class="list">
							<li class="list__item">
								<i class="icon icon_suitcase"></i>
								<strong>"000 Forward Media Group"</strong> Январь 2012 - по настоящее время
							</li>
							<li class="list__item">
								<i class="icon icon_suitcase"></i>
								<strong>ГУ МЧС ФПС по г. Москве - младший инспектор</strong> Март 2003 - Январь 2012
							</li>
							<li class="list__item">
								<i class="icon icon_suitcase"></i>
								<strong>"000 3w-Style"</strong> Октябрь 2007 - май 2008
							</li>
						</ul>
					</section>

					<section class="education">
						<h2 class="h2"><span class="decor">Образование</span></h2>
						<ul class="list">
							<li class="list__item">
								<i class="icon icon_knowledge"></i>
								<strong>Московский Государственный институт электроники и математики (технический университет)</strong> Октябрь 2002 - Июнь 2008
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Онлайн обучение "LoftBlog"</strong> (2014 г.)
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Курсы "JavaScript. Уровень 1. Основы веб - программирования - NEW"</strong> Центр компьютерного обучения при МГТУ им. Н.Э. Баумана (2013 г.)
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Курсы "JavaScript. Уровень 2. Расширенные возможности"</strong> Центр компьютерного обучения при МГТУ им. Н.Э. Баумана (2013 г.)
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Курсы "HTML и CSS. Уровень 2. Кроссбраузерная верстка и основы юзабилити"</strong> Центр компьютерного обучения при МГТУ им. Н.Э. Баумана (2010 г.)
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Курсы "Программирование на Java 2"</strong> Центр компьютерного обучения при МГТУ им. Н.Э. Баумана (2008 г.)
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Курсы "Основы программирования и баз данных"</strong> Центр компьютерного обучения при МГТУ им. Н.Э. Баумана (2008 г.)
							</li>
							<li class="list__item">
								<i class="icon icon_paper"></i>
								<strong>Курсы "Основы HTML и CSS"</strong> Центр компьютерного обучения при МГТУ им. Н.Э. Баумана (2006 г.)
							</li>
						</ul>

					</section>

				</div>
			</div>
		
		</div>
		<div class="wrap__footer">
			<footer>
				<?php include 'templates/footer.php'; ?>
			</footer>	
		</div>
	</div>

	<div class="wrap__popup hide">
		<div class="popup">
			<h2 class="h2">Авторизируйтесь</h2>
			<form class="form__data" name="registration" method="post" action="/">
				<div class="form__row">
					<div class="form__col_r active">
						<label for="choice-2">Логин</label>
			       
						<input type="text" name="login" id="login" value="" tabindex="2" required="true" />

						<span class="error">
							<span class="error_corner">введите логин</span>
						</span>

					</div>

					<div class="form__col_l error_password active">
						<label for="choice-1">Пароль</label>

						<input type="password" name="password" id="password" value="" tabindex="1" required="true" />

						<span class="error">
							<span class="error_corner">введите пароль</span>
						</span>
					</div>
					
				</div>					

			    <div class="form__regist">
					<input type="submit" name="submit" id="submit" value="Войти" />
			    </div>

			</form>
		</div>
	</div>

	<div class="shadow"></div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/prefixfree.js"></script>
	<script src="js/main.js"></script>
</body>
</html>
