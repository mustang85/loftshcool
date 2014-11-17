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
					<section class="contact">
						<h2 class="h2">У вас интересный проект? Напишите мне</h2>
						<form class="form__data" name="registration" method="post" action="/">
							<div class="form__row">
								<div class="form__col_r">
									<label for="choice-2">Email</label>
						       
									<input type="text" name="email" id="choice-2" value="" tabindex="2" required="true" placeholder="Куда мне писать" />
								</div>

								<div class="form__col_l">
									<label for="choice-1">Имя</label>

									<input type="text" name="login" id="choice-1" value="" maxlength="40" tabindex="1" required="true" placeholder="Как к Вам обращаться" />
								</div>
								
							</div>
						        
							<div class="form__row">
								<label for="choice-3">Сообщение</label>
						        
						        <textarea name="msg" id="" cols="10" rows="10" placeholder="Кратко в чем суть"></textarea>
							</div>
						        
							<div class="form__row form__row_captcha">
								<label for="captcha-input" class="captcha__title">Введите код, указанный на картинке</label>
								<div class="form__col_l">
									<div class="captcha">
										<img width="180" height="77" alt="" src="img/captcha.gif" />
									</div>
								</div>
								<div class="form__col_r">
									<input class="captcha__code" type="text" name="captcha[input]" id="captcha-input" value="" tabindex="5" placeholder="введите код">
								</div>	
							</div>
								

						    <div class="form__regist">
								<input type="submit" name="submit" id="submit" value="Отправить" />

								<input class="form__reset" type="reset" name="reset" id="reset" value="Очистить" />
						    </div>
								

						</form>
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
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/prefixfree.js"></script>
	<script src="js/main.js"></script>
</body>
</html>

