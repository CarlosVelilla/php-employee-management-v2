<?php include_once 'assets/html/head.html' ?>

<body>
	<?php include_once 'assets/html/header.html' ?>
	<div class="container">
		<div class="form-container sign-in-container">
			<form method="POST" action="" class="form-login" id="formlogin">
				<h1>Sign in</h1>
				<input type="email" id="email" placeholder="Email" autocomplete="off" />
				<input type="password" id="password" placeholder="Password" />
				<a href="#">Forgot your password?</a>
				<button id="signinBtn" class="button-signin">Sign In</button>
				<div id="login-error"></div>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Employee Manager</h1>
					<p>Enter your personal data and start managing your employees</p>
				</div>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="assets/js/login.js"></script>
</body>

</html>