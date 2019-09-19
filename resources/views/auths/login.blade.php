<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	{!! config('barber.title_login') !!}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('/admin/assets/vendor/linearicons/style.css')}}">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/main.css')}}">
	<!-- FOR DEMO PURPOSES ONLY. You should remove this in your project -->
	<link rel="stylesheet" href="{{asset('admin/assets/css/demo.css')}}">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="{{asset('admin/assets/img/favicon.png')}}">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
								<div class="logo text-center img-circle"><img src="{{asset('frontend/img/logo1.png')}}" alt="Logo Kang Barber" width="250" height=""></div>
								<p class="lead">Login Admin<i class="lnr lnr-user"></i></p>
							</div>
                            <form class="form-auth-small" action="/loginAdmin" method="post">
                            {{csrf_field()}}
								<div class="form-group">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="form-control" id="signin-email"  placeholder="Email" required>
								</div>
								<div class="form-group">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="form-control" id="signin-password"  placeholder="Password" required>
								</div>
								<!-- <div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Ingatkan saya</span>
									</label>
								</div> -->
								<button type="submit" class="btn btn-primary btn-lg btn-block">MASUK</button> <br>
							    <p>Buat akun admin <a href="/register" class=""><span>Register</span></a></p>
								<!-- <div class="bottom">
									<span class="helper-text"><i class="fa fa-lock"></i> <a href="#">lupa password?</a></span>
								</div> -->
							</form>
						</div>
					</div>
					<div class="right" style="Background: url('{{config('barber.image_background')}}')" >
						<div class="content text">
                            <h1 class="heading"> Selamat datang <i class="lnr lnr-thumbs-up"></i> </h1>
							<hr>
							<br>
							<p>@KangBarber.co.id</p>
							<hr>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>

</html>