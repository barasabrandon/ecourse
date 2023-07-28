<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sale electronic gadgets.">
	<title>Mavil Technologies</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/layout.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/components.min.css" rel="stylesheet" type="text/css">
	<link href="/limitlesstheme/assets/css/colors.min.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->
</head>

<body class="bg-slate-800">

	<!-- Page content -->
	<div class="page-content">

		<!-- Main content -->
		<div class="content-wrapper">

			<!-- Content area -->
			<div class="content d-flex justify-content-center align-items-center">

				<!-- Login card -->
				<form class="login-form" method="POST" action="{{ route('register') }}">
                    @csrf 
					<div class="card mb-0">
						<div class="card-body">
							<div class="text-center mb-3">
								<i class="icon-plus3 icon-2x text-blue border-blue border-3 rounded-round p-3 mb-3 mt-1"></i>
								<h5 class="mb-0">Login to your account</h5>
								<span class="d-block text-muted">Your credentials</span>
							</div>

                            <div class="form-group form-group-feedback form-group-feedback-left">
								<input id="name" class="form-control" placeholder="Enter name" type="text" name="name" :value="old('name')" required autofocus />
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>


							<div class="form-group form-group-feedback form-group-feedback-left">
								<input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="Email">
								<div class="form-control-feedback">
									<i class="icon-user text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input class="form-control" id="password"  type="password" name="password" required autocomplete="current-password" placeholder="Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group form-group-feedback form-group-feedback-left">
								<input id="password_confirmation" class="form-control"  type="password" name="password_confirmation" required autocomplete="current-password" placeholder="Confirm Password">
								<div class="form-control-feedback">
									<i class="icon-lock2 text-muted"></i>
								</div>
							</div>

							<div class="form-group d-flex align-items-center">
								<div class="form-check mb-0">
									<label class="form-check-label">
										<input type="checkbox" name="remember" class="form-input-styled" checked data-fouc>
										Remember
									</label>
								</div>

								<a href="#" class="ml-auto">Forgot password?</a>
							</div>

							<div class="form-group">
                                <button type="submit" class="btn col-12 bg-blue-400 btn-labeled btn-labeled-right"><b><i class="icon-plus3"></i></b> Create account</button>
							</div>
							<div class="form-group text-center text-muted content-divider">
								<span class="px-2">Don't have an account?</span>
							</div>

							<div class="form-group">
								<a href="{{ route('login') }}" class="btn btn-light btn-block">Sign in</a>
							</div>

						</div>
					</div>
				</form>
				<!-- /login card -->

			</div>
			<!-- /content area -->

		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>
	<!-- Core JS files -->
	<script src="/limitlesstheme/global_assets/js/main/jquery.min.js"></script>
	<script src="/limitlesstheme/global_assets/js/main/bootstrap.bundle.min.js"></script>
	<script src="/limitlesstheme/global_assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script src="/limitlesstheme/global_assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script src="assets/js/app.js"></script>
	<script src="/limitlesstheme/global_assets/js/demo_pages/login.js"></script>
	<!-- /theme JS files -->
</html>
