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
					<section class="contact">
						<h2 class="h2">У вас интересный проект? Напишите мне</h2>
						<form class="form_data" name="registration" method="post" action="/">
							<div class="row">
								<div class="col_r">
									<label for="choice-2">Email</label>
						       
									<input type="text" name="email" id="choice-2" value="" tabindex="2" required="true" placeholder="Куда мне писать" />

									<span class="corner tl"></span>
									<span class="corner tr"></span>
									<span class="corner br"></span>
									<span class="corner bl"></span>
								</div>

								<div class="col_l">
									<label for="choice-1">Имя</label>

									<input type="text" name="login" id="choice-1" value="" maxlength="40" tabindex="1" required="true" placeholder="Как к Вам обращаться" />

									<span class="corner tl"></span>
									<span class="corner tr"></span>
									<span class="corner br"></span>
									<span class="corner bl"></span>
								</div>
								
							</div>
						        
							<div class="row">
								<label for="choice-3">Сообщение</label>
						        
						        <div class="data_wrap">
						        	<textarea name="msg" id="" cols="10" rows="10" placeholder="Кратко в чем суть"></textarea>

									<span class="corner tl"></span>
									<span class="corner tr"></span>
									<span class="corner br"></span>
									<span class="corner bl"></span>	
						        </div>
								
							</div>
						        
							<div class="row row_captcha">
								<label for="captcha-input" class="captcha_t">Введите код, указанный на картинке</label>
								<div class="col_l">
									<div class="captcha">
										<img width="180" height="77" alt="" src="img/captcha.gif" />

										<span class="corner tl"></span>
										<span class="corner tr"></span>
										<span class="corner br"></span>
										<span class="corner bl"></span>	
									</div>
								</div>
								<div class="col_r captcha_code">
									<input type="text" name="captcha[input]" id="captcha-input" value="" tabindex="5" placeholder="введите код">

									<span class="corner tl"></span>
									<span class="corner tr"></span>
									<span class="corner br"></span>
									<span class="corner bl"></span>
								</div>	
							</div>
								

						    <div class="regist-submit">
								<span>
									<input type="submit" name="submit" id="submit" value="Отправить" />
								</span>

								<span class="reset">
									<input type="reset" name="reset" id="reset" value="Очистить" />
								</span>
						    </div>
								

						</form>
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