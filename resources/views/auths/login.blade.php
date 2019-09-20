<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	{!! config('barber.title_login') !!}
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- TOASTER -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
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
                            <form class="form-auth-small" action="" method="">
                            {{csrf_field()}}
								<div class="form-group">
									<label for="u_email" class="control-label sr-only"></label>
									<input name="u_email" type="email" class="form-control" id="u_email"  placeholder="Masukan email" required>
								</div>
								<div class="form-group">
									<label for="u_password" class="control-label sr-only"></label>
									<input name="u_password" type="password" class="form-control" id="u_password"  placeholder="Masukan Password" required>
								</div>
								<button type="submit" class="btn btn-primary btn-lg btn-block" onclick="loginUser();">MASUK</button> <br>
							    <p>Buat akun admin <a href="/register" class=""><span>Registrasi</span></a></p>
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


	
<!-- SDK FireBase -->
		<!-- The core Firebase JS SDK is always required and must be listed first -->
			<script src="https://www.gstatic.com/firebasejs/6.6.2/firebase.js"></script>
		<!-- TODO: Add SDKs for Firebase products that you want to use
			https://firebase.google.com/docs/web/setup#available-libraries -->
		<script>
		// Your web app's Firebase configuration
		var firebaseConfig = {
			apiKey: "AIzaSyAZw3MrxGhyl7KOUfEn48pjuDU8rABTT8A",
			authDomain: "bokingkangbarers.firebaseapp.com",
			databaseURL: "https://bokingkangbarers.firebaseio.com",
			projectId: "bokingkangbarers",
			storageBucket: "bokingkangbarers.appspot.com",
			messagingSenderId: "65666793632",
			appId: "1:65666793632:web:84128b2cf66b7a0d0909c5"
		};
		// Initialize Firebase
		firebase.initializeApp(firebaseConfig);
		</script>
<!-- End -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"> </script>

    <script src="{{asset('admin/assets/scripts/relog.js')}}"></script>

	
	<script>
	   @if(Session::has('sukses'))
	      toastr.success("{{Session::get('sukses')}}", "Selamat")
	   @endif
	</script>

</body>

</html>
