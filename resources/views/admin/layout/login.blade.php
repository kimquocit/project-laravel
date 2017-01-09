<!doctype html>
<html class="no-js" lang="en">
        <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>ModularAdmin - Free Dashboard Theme | HTML Version</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
        <base href="{{asset('')}}">
        <link rel="stylesheet" href="admin_asset/css/vendor.css">
        <link rel="stylesheet" id="theme-style" href="admin_asset/css/app.css">
        <!-- Theme initialization -->
        <script>
            var themeSettings = (localStorage.getItem('themeSettings')) ? JSON.parse(localStorage.getItem('themeSettings')) :
            {};
            var themeName = themeSettings.themeName || '';
            if (themeName)
            {
                document.write('<link rel="stylesheet" id="theme-style" href="admin_asset/css/app-' + themeName + '.css">');
            }
            else
            {
                document.write('<link rel="stylesheet" id="theme-style" href="admin_asset/css/app.css">');
            }
        </script>
        </head>

        <body>
<div class="auth">
					<div class="auth-container">
		<div class="card">
							<header class="auth-header">
				<h1 class="auth-title">
									<div class="logo"> <span class="l l1"></span> <span class="l l2"></span> <span class="l l3"></span> <span class="l l4"></span> <span class="l l5"></span> </div>
									ModularAdmin </h1>
			</header>
							<div class="auth-content">
				<p class="text-xs-center">LOGIN TO CONTINUE</p>
				@if(session('message'))
<div class="alert alert-danger">
{{session('message')}}
</div>
@endif
				<form id="login-form" action="admin/login" method="POST">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
								<div class="form-group">
						<label for="username">Username</label>
						<input type="email" class="form-control underlined" name="email" id="username" placeholder="Your email address" required>
					</div>
									<div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control underlined" name="password" placeholder="Your password" required>
					</div>
									<div class="form-group">
						<label for="remember">
											<input class="checkbox" id="remember" type="checkbox">
											<span>Remember me</span> </label>
						<a href="reset.html" class="forgot-btn pull-right">Forgot password?</a> </div>
									<div class="form-group">
						<button type="submit" class="btn btn-block btn-primary">Login</button>
					</div>
									<div class="form-group">
						<p class="text-muted text-xs-center">Do not have an account? <a href="signup.html">Sign Up!</a></p>
					</div>
								</form>
			</div>
						</div>
		<div class="text-xs-center"> <a href="index.html" class="btn btn-secondary rounded btn-sm"> <i class="fa fa-arrow-left"></i> Back to dashboard </a> </div>
	</div>
				</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
					<div class="color-primary"></div>
					<div class="chart">
		<div class="color-primary"></div>
		<div class="color-secondary"></div>
	</div>
				</div>
<script src="admin_asset/js/vendor.js"></script> 
<script src="admin_asset/js/app.js"></script>
</body>
</html>