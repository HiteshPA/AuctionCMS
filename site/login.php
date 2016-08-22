	<html>
	<head>
		<title>Artworks Login</title>
	<!--	<link rel="stylesheet" href="//localhost/BigTree/site/index.php/admin/css/main.css" type="text/css" media="screen" charset="utf-8" />
		<script src="//localhost/BigTree/site/index.php/admin/js/lib.js"></script>
		<script src="//localhost/BigTree/site/index.php/admin/js/main.js"></script>
	-->
	</head> 
<body>
<?
if(isset($_COOKIE["id"]) && isset($_COOKIE["user"]) && isset($_COOKIE["pass"])){
	if($_COOKIE["level"]==1){?>
			<script type="text/javascript">location.href = '../admin/index.php';</script>
		<?}else{?>
			<script type="text/javascript">location.href = '../artist/index.php';</script>

		<?}

}else{?>

		<div class="login_wrapper">
			<h1>Login</h1>
			<form method="post" action="confirmsession.php" class="module">
		<fieldset>
		<label>Email</label>
		<input type="email" id="user" name="user" class="text" value="" />
	</fieldset>
	<fieldset>
		<label>Password</label>
		<input type="password" id="password" name="password" class="text" />
		
	</fieldset>
	<fieldset class="lower">
		<!--<a href="http://localhost/BigTree/site/index.php/admin/login/forgot-password/" class="forgot_password">Forgot Password?</a>-->
		<input type="submit" class="button blue" value="Login" />
	</fieldset>
	</form>			
			<!--<a href="http://www.bigtreecms.com" class="login_logo" target="_blank"></a>-->
	<!--		<span class="login_copyright">
				Version 4.2.11&nbsp;&nbsp;&middot;&nbsp;&nbsp;&copy; 2016 <a href="http://www.fastspot.com" target="_blank"> Fastspot</a>
			</span>	-->
		</div>



	<div class="login_wrapper">
			<h1>Register</h1>
			<form method="post" action="register.php" class="module">
		<fieldset>
		<label>Username</label>
		<input type="text" id="username" name="username" class="text" value="" />
	</fieldset>		
		<fieldset>
		<label>Email</label>
		<input type="email" id="user" name="user" class="text" value="" />
	</fieldset>
	<fieldset>
		<label>Password</label>
		<input type="password" id="password" name="password" class="text" />
		
	</fieldset>
	<fieldset class="lower">
		<!--<a href="http://localhost/BigTree/site/index.php/admin/login/forgot-password/" class="forgot_password">Forgot Password?</a>-->
		
		<input type="submit" class="button blue" value="SignUp" />
	</fieldset>
	</form>			
	<!--		<a href="http://www.bigtreecms.com" class="login_logo" target="_blank"></a>
			<span class="login_copyright">
				Version 4.2.11&nbsp;&nbsp;&middot;&nbsp;&nbsp;&copy; 2016 <a href="http://www.fastspot.com" target="_blank"> Fastspot</a>
			</span>	-->
		</div>


<?}?>
	</body>
</html>
